<?php

namespace App\Controller;

use App\Entity\ClientUser;
use App\Repository\UserRepository;
use App\Entity\User;
use App\Repository\ClientUserRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints\Date;

class ClientManagerController extends AbstractController
{

    /**
     * index
     * @Route("/client/manager/index", name="client_manager_index")
     *
     * @param UserRepository $userRepository
     * @return Response
     */
    public function index(UserRepository $userRepository): Response
    {
        $users = $userRepository->findAll();
        return $this->render('client_manager/gestionClient.html.twig', [
            'users' => $users,
        ]);
    }
    /**
     * CRUD
     *
     * @Route("/client/manager/json/{id?}", name="client_manager_json")
     * @param UserRepository $userRepository
     * @param User $user
     * @return Response
     */
    public function clientManagerObject(Request $request, EntityManagerInterface $entityManagerInterface, User $user, UserRepository $userRepository): Response
    {
        if (!$request->get('id')) return $this->json([
            'code' => 404,
            'message' => 'user not found'
        ], 404);

        $delUser = $userRepository->findOneBy([
            'id' => $user->getId()
        ]);


        if ($delUser === null) return $this->json([
            'code' => 404,
            'message' => 'user not found'
        ], 404);
        // $userMail = $delUser->getEmail();


        // $allUsers = $userRepository->findAll();
        // $updatUsers = array_filter( $allUsers, function( $v ) use ($user) {
        //      return !($v->getId() == $user->getId());
        //     } );

        $entityManagerInterface->remove($delUser);
        $entityManagerInterface->flush();

        $updatedUsers = $userRepository->findAll();
        dump($updatedUsers);
        die;

        return $this->json([
            'code' => 200,
            'users' => $updatedUsers,
            'sucess' => 'sucessfuly fetched',
        ], 200);
    }

    /**
     * CRUD
     *
     * @Route("/client/manager/react", name="client_manager_react")
     * 
     */
    public function clientManagerReact()
    {
        return $this->render('client_manager/gestionClientReact.html.twig');
    }

    /**
     * read user data fron db
     * 
     * @Route("/client/manager/read", name="client_manager_read")
     * 
     * @param ClientUserRepository $clientUserRepository
     * @param EntityManagerInterface $entityManagerInterface
     * @return JsonResponse
     */
    public function read(Request $request, ClientUserRepository $clientUserRepository, EntityManagerInterface $entityManagerInterface)
    {
        $session = $request->getSession();
        $session->start();
        $clientUsers = $clientUserRepository->findAll();
        $arrayOfClient = [];

        foreach ($clientUsers as $clientUser) {
            $arrayOfClient[] = $clientUser->toArray();
        }
        return $this->json($arrayOfClient, 200);
    }

    /**
     * create user data fron front
     * 
     * @Route("/client/manager/create", name="client_manager_create")
     * 
     * @param EntityManagerInterface $entityManagerInterface
     * @return JsonResponse
     */
    public function create(Request $request, UserPasswordEncoderInterface $passwordEncoder, EntityManagerInterface $entityManagerInterface)
    {
        $content = json_decode($request->getContent());

        $clientUser = new ClientUser();
        $clientUser->setUsername($content->name);
        $clientUser->setPassword(
            $passwordEncoder->encodePassword($clientUser, $content->password)
        );

        $clientUser->setDate(new DateTime('now'));
        $clientUser->setRoles([$content->role]);
        $clientUser->setStatus($content->status === "Active" ? true : false);

        // dump($clientUser->toArray());

        try {
            $entityManagerInterface->persist($clientUser);
            $entityManagerInterface->flush();
            return $this->json([
                'clientUser' => $clientUser->toArray()
            ], 200);
        } catch (Exception $exp) {
            //error msg
        }
    }
}