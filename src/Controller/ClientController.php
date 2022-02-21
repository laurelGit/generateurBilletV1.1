<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\User;
use App\Form\ClientFormType;
use App\Form\ClientFormVerifType;
use App\Form\CustomPayType;
use App\Repository\ClientRepository;
use App\Repository\UserRepository;
use App\Services\CenterService;
use App\Services\Download;
use App\Services\QrcodeService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Zxing\QrReader;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\DBAL\DBALException;
use Symfony\Component\Validator\Constraints\Length;

/**
 * @Route("/client", name="client.")
 */
class ClientController extends AbstractController
{


    /**
     * @Route("/", name="index")
     * @param $clientRepository $clientRepository
     * 
     * @return Response
     */
    public function index(ClientRepository $clientRepository): Response
    {

        $clients = $clientRepository->findAll();
        // dump($clients);die;
        // foreach($clients as $key=>$value){
        //     $value->setQrcode(base64_encode(stream_get_contents($value->getQrcode())));
        // }
        return $this->render('client/index.html.twig', [
            'clients' => $clients
        ]);
    }


    /**
     * @Route("/creerClient", name="creerClient")
     * @param Request $request
     * @param QrcodeService $qrcodeService
     * @param UserInterface $user
     * @return Response
     */
    public function creerClient(Request $request, QrcodeService $qrcodeService, UserInterface $user, CenterService $centerService)
    {

        // dd($qrcodeService->qrcode('wilfried'));

        //creer nouveau client
        $client = new Client();

        //creer formulaire avec ClientFormType
        $form = $this->createForm(ClientFormType::class, $client);
        // $formP = $this->createForm(CustomPayType::class, $nClient);
        $form->handleRequest($request);

        $roles = $user->getRoles();
        $boolAdmin = in_array('ROLE_CAISSIER', $roles);

        // verification formulaire
        if ($form->isSubmitted()) {
            // dump($form->get('vendeur_id')->getData());
            $checked = $form->get('vendeur_id')->getData();
            // dump($checked);die;
            // dd($form);
            // manager
            $em = $this->getDoctrine()->getManager();
            $data = $client->getNom() . "&" . $client->getContact() . "&" . $client->getEmail();

            $qrcode = $qrcodeService->qrcode($data);
            //

            $path = dirname(__DIR__, 2) . '/public/assets/';
            $imgpath = $path . 'qr-code/' . $qrcode;

            $imgName = $centerService->makeCenter($imgpath, $client);

            //
            $client->setVendeur($user);
            $client->setQrcode($imgName);
            if ($checked === true) {
                $client->setPayer(true);
            }

            if ($client->getCategorie() == 'INVITE') $client->setPayer(true);
            $em->persist($client);
            $em->flush();

            return $this->redirect($this->generateUrl('client.gen_billet', [
                'qrcode' => $client->getQrcode()
            ]));
        }

        return $this->render('client/show.html.twig', [
            'form' => $form->createView(),
            'isadmin' => $boolAdmin
        ]);
    }

    /**
     * @Route("/decode/{qrcode}", name="decode")
     * @param Client $client
     * @param Request $request
     * @return Response
     */
    public function decode(Request $request, Client $client)
    {

        $namePng = $request->get('qrcode');
        // dump($namePng);die;

        $path = dirname(__DIR__, 2) . '/public/assets/';
        $imgpath = $path . 'qr-code/' . $namePng;

        $qrcode = new QrReader($imgpath);
        $text = $qrcode->text();
        $textArray = $this->split_qr($text);
        $contact = $textArray[1];
        $email = $textArray[2];
        $nom = $textArray[0];

        return $this->render('client/decode.html.twig', [
            'client' => $client,
            'contact' => $contact,
            'email' => $email,
            'nom' => $nom
        ]);
    }

    private function split_qr($data)
    {
        $textArray = explode("&", $data);
        return $textArray;
    }

    /**
     * @Route("/gen_billet/{qrcode}", name="gen_billet")
     * @param Client $client
     * @param Request $request
     * @param CenterService $centerService
     * @param Download $download
     * @return Response
     */
    public function genererBillet(Request $request, Client $client, CenterService $centerService, Download $download)
    {
        $namePng = $request->get('qrcode');
        // dump($namePng);die;

        $path = dirname(__DIR__, 2) . '/public/assets/';
        $imgpath = $path . 'qr-code/' . $namePng;

        // $imgName = $centerService->makeCenter($imgpath, $client);
        return $this->render('client/genererBillet.html.twig', [
            'imgName' => $client->getQrcode(),
            'client' => $client
        ]);
    }


    /**
     * @Route("/download_img/{imgName}", name="download_img")
     * @param Request $request
     * @param Download $download
     * @return Response
     */
    public function downloadImg(Request $request, Download $download)
    {
        $imgName = $request->get('imgName');
        $path = dirname(__DIR__, 2) . '/public/assets/';
        $imgPath = $path . 'img_billet/' . $imgName;
        $download->load($imgPath);
        return new Response('<h4>File downloaded</h4>');
    }


    /**
     * @Route("/scan_decoder/{contentData?}", name="scan_decoder")
     * @param Request $request
     * @param ClientRepository $clientRepository
     * @return Response
     */
    public function scanDecoder(Request $request, ClientRepository $clientRepository)
    {
        $data = $request->get('contentData');

        $error = null;
        if ($data != null) {

            $split_data = $this->split_qr($data);
            // dump($split_data);die;
            $client = $clientRepository->findOneBy(['contact' => $split_data[1]]);

            $response = new RedirectResponse($this->generateUrl('client.scan_results', [
                'contact' => $client->getContact()
            ]));
            // return $this->redirect($this->generateUrl('client.scan_results', [
            //     'email' => $client->getEmail()
            // ]));
            return $response;
        }
        $error = "Billet non trouver";
        return $this->render('client/scanDecoder.html.twig', [
            'error' => $error
        ]);
    }


    /**
     * @Route("/scan_results/{contact}", name="scan_results")
     * @param Request $request
     * @param Client $client
     * @return Response
     */
    public function scanResults(Client $client, Request $request, UserInterface $user)
    {
        $session = $request->getSession();
        $session->start();
        $status = "Payé";
        $verifier = "Verifié";
        $nClient = new Client;
        $form = $this->createForm(CustomPayType::class, $nClient);
        $formVerif = $this->createForm(ClientFormVerifType::class, $nClient);
        $form->handleRequest($request);
        $formVerif->handleRequest($request);
        // dump($client);die;

        if ($form->isSubmitted() && $form->isValid()) {
            // manager
            // if($form->getErrors()){
            //     throw $this->createNotFoundException(
            //         'Ce contact Existe deja '.$client->getContact()
            //     );
            // }

            $em = $this->getDoctrine()->getManager();
            // $product = $entityManager->getRepository(Product::class)->find($id);
            $nClient = $em->getRepository(Client::class)->findOneBy([
                'contact' => $client->getContact(),
            ]);
            // dump($nClient);

            if (!$nClient) {
                throw $this->createNotFoundException(
                    'No data found for contact ' . $client->getContact()
                );
            }

            // $product->setName('New product name!');

            $nClient->setPayer($client->getContact());
            $nClient->setCaissier($user);
            // $form->getData();
            // dump($post);
            // $em->persist($post);
            $em->flush();
        } else if ($formVerif->isSubmitted() && $formVerif->isValid()) {
            // manager
            $em = $this->getDoctrine()->getManager();
            // $product = $entityManager->getRepository(Product::class)->find($id);
            $nClient = $em->getRepository(Client::class)->findOneBy([
                'contact' => $client->getContact()
            ]);

            // dump($nClient);
            if (!$nClient) {
                throw $this->createNotFoundException(
                    'No data found for contact ' . $client->getContact()
                );
            }
            $nClient->setVerifier($client->getContact());
            // $nClient->setVendeur($user);
            $em->flush();
        }

        if ($client->getPayer() == null && $client->getVerifier() == null) {
            $status = "Non Payer";
            $verifier = "Non Verifier";

            return $this->render('client/scanResults.html.twig', [
                'client' => $client,
                'status' => $status,
                'verifier' => $verifier,
                'form' => $form->createView()
            ]);
        } else if ($client->getPayer() != null && $client->getVerifier() == null) {
            //dump($client->getVerifier());
            $status = "Payé";
            $verifier = "Non Verifier";
            return $this->render('client/scanResults.html.twig', [
                'client' => $client,
                'status' => $status,
                'verifier' => $verifier,
                'formv' => $formVerif->createView()
            ]);
        } else if ($client->getPayer() != null && $client->getVerifier() != null) {
            $status = "Payé";
            $verifier = "Verifié";
        }


        return $this->render('client/scanResults.html.twig', [
            'client' => $client,
            'status' => $status,
            'verifier' => $verifier,
            'form' => $form->createView(),
            'formv' => $formVerif->createView()
        ]);
    }

    /**
     * @Route("/acceuil", name="acceuil")
     * @param ClientRepository clientRepository
     * @return Response
     */
    public function acceuil()
    {

        return $this->render('client/acceuil.html.twig');
    }


    /**
     * @Route("/dashboard/dashboard", name="dashboard_mixte")
     * @param UserRepository $userRepository
     * @return Response
     */
    public function dashboardMixte(UserRepository $userRepository)
    {
        $users = $userRepository->findAll();
        // $entityManager = $this->getEntityManager();
        // $qb = $em->createQueryBuilder();
        // $query = $em->createQuery(
        //     'SELECT *
        //     FROM App\Entity\Client c
        //     INNER JOIN  App\Entity\User u
        //     WHERE c.vendeur = u.id'
        // );
        // $qb->innerJoin(
        //     Client::class,    // Entity
        //     'c',               // Alias
        //     Join::WITH,        // Join type
        //     'p.id = c.project' // Join columns
        // );
        // $qb = $em->getRepository(Client::class)
        //     ->createQueryBuilder('client');
        // $qb->innerJoin('App\Entity\User', 'user', 'WITH', 'user.id=client.vendeur');


        // dump($qb->getOneOrNullResult());
        // $caissier = array_filter($caissier);
        // dump(array_filter($caissier));
        // dump($caissier);
        // dump($users);

        return $this->render('admin/historique.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/dashboard/dashboardUtilisateur", name="dashboard_utilisateur")
     * @param ClientRepository clientRepository
     * @return Response
     */
    public function dashboardUtilisateur(ClientRepository $clientRepository)
    {
        $clients = $clientRepository->findAll();
        // dump($clients);

        return $this->render('admin/list_utilisateur.html.twig', [
            'clients' => $clients
        ]);
    }

    /**
     * @Route("/dashboard/his_caisse/{id}/{nom}", name="his_caisse")
     * @param ClientRepository clientRepository
     * @param Request $request
     * @return Response
     */
    public function historiqueCaisse(Request $request)
    {
        $id = $request->get('id');
        $nom = $request->get('nom');
        // $clients = $clientRepository->findAll();
        $em = $this->getDoctrine()->getManager();
        // $clients = $clientRepository->findAll();
        $encaiser = $em->getRepository(Client::class)->findBy(array('caissier' => $id));
        // $somme = $this->calculSomme($encaiser);
        return $this->render('admin/historiqueCaisse.html.twig', [
            'encaiser' => $encaiser,
            'caissier' => $nom,
            // 'somme' => $somme
        ]);
    }
    /**
     * @Route("/dashboard/details/{id}/{nom}", name="details")
     * @param ClientRepository clientRepository
     * @param Request $request
     * @return Response
     */
    public function details(Request $request)
    {
        $id = $request->get('id');
        $nom = $request->get('nom');
        // $clients = $clientRepository->findAll();
        $em = $this->getDoctrine()->getManager();
        // $clients = $clientRepository->findAll();
        $detailsCaisse = $em->getRepository(Client::class)->findBy(array('caissier' => $id));
        $detailsVente = $em->getRepository(Client::class)->findBy(array('vendeur' => $id));
        $lenCaisse = count($detailsCaisse);
        $lenVente = count($detailsVente);
        return $this->render('admin/details.html.twig', [
            'detailsCaisse' => $detailsCaisse,
            'detailsVente' => $detailsVente,
            'utilisateur' => $nom,
            'lenCaisse' => $lenCaisse,
            'lenVente' => $lenVente
        ]);
    }

    /**
     * @Route("/listImages", name="list_images")
     * @param Request $request
     * @return Response
     */
    public function getListImages(Request $request)
    {
        $path = dirname(__DIR__, 2) . '/public/assets/img_billet/';
        $images = glob($path . "*.png", GLOB_MARK);
        $subImages = [];
        foreach ($images as $img) {
            $subImages[] = substr($img, 82); // 62 in server
        }
        return $this->render('client/listBillet.html.twig', [
            'images' => $subImages
        ]);
    }

    private function calculSomme(array $encaiser)
    {
        $len = count($encaiser);
        $total = 0;
        // for($row=0; $row <= $len; $row++){
        //     if($encaiser[$row].categorie == 'STANDARD'){
        //         $total =+ 3000;
        //     }elseif($encaiser[$row].categorie == 'COUPLE'){
        //         $total =+ 5000;
        //     }elseif($encaiser[$row].categorie == 'VIP'){
        //         $total =+ 10000;
        //     }elseif($encaiser[$row].categorie == 'VIP-COUPLE'){
        //         $total =+ 15000;
        //     }
        // }
        foreach ($encaiser as $u) {
            dump($encaiser);
            if ($u . getCategorie() === 'STANDARD') {
                $total = +3000;
            } elseif ($u . getCategorie() === 'COUPLE') {
                $total = +5000;
            } elseif ($u . getCategorie() === 'VIP') {
                $total = +10000;
            } elseif ($u . getCategorie() === 'VIP-COUPLE') {
                $total = +15000;
            }
        }
        return $total;
    }



    /**
     * @Route("/login", name="login")
     */
    public function connexion()
    {
        return $this->render('utilisateur/login.html.twig');
    }

    /**
     * @Route("/inscription", name="enregistrement")
     */
    public function enregistrement()
    {
        return $this->render('utilisateur/inscription.html.twig');
    }
    /**
     * @Route("/tarif", name="tarif")
     */
    public function tarif()
    {
        return $this->render('tarif/tarif.html.twig');
    }
}