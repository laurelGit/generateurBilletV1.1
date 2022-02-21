<?php

namespace App\Controller;

use App\Repository\ClientRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

Class SearchController extends AbstractController {

    /**
     * @Route("/search", name="search")
     */
    public function searchBar(){
        $form = $this->createFormBuilder(null)
            ->setAction($this->generateUrl('handleSearch'))
            ->add('Rechercher', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Entrer le nom de l'utilisateur...",
                    'style' => 'display: inline;border-radius: 30px; margin-bottom: 10px; position: relative; bottom: 30px;'
                ]
            ])
            ->add('Chercher', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                    'style' => 'display: inline; background-color: rgba(255, 215, 0, 0.9); color: black; border: 2px solid black; border-radius: 30px;text-align: center; position: relative; bottom: 25px;)'
                ]
            ])
            ->getForm();
        
            return $this->render('search/searchBar.html.twig', [
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/searchC", name="searchC")
     */
    public function searchBarC(){
        $form = $this->createFormBuilder(null)
            ->setAction($this->generateUrl('handleSearchClient'))
            ->add('Rechercher', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => "Entrer le nom du clients...",
                    'style' => 'display: inline;border-radius: 30px; margin-bottom: 10px; position: relative; bottom: 30px;'
                ]
            ])
            ->add('Chercher', SubmitType::class, [
                'attr' => [
                    'class' => 'btn btn-primary',
                    'style' => 'display: inline; background-color: rgba(255, 215, 0, 0.9); color: black; border: 2px solid black; border-radius: 30px;text-align: center; position: relative; bottom: 25px;)'
                ]
            ])
            ->getForm();
        
            return $this->render('search/searchBar.html.twig', [
                'form' => $form->createView()
            ]);
    }

    /**
     * @Route("/handleSearch", name="handleSearch")
     * @param Request $request
     * @param UserRepository $uRepo
     */
    public function handleSearch(Request $request, UserRepository $uRepo){
        // dump($request->request->get('form')['query']);die;
        $searchInput = $request->request->get('form')['Rechercher'];
        if($searchInput){
            $fuser = $uRepo->findBy([ 'nom' =>  $searchInput]);
        }
        // dump($fuser);die;
        
        return $this->render('admin/historique.html.twig', [
            'users' => $fuser
        ]);
    }

    /**
     * @Route("/handleSearchClient", name="handleSearchClient")
     * @param Request $request
     * @param ClientRepository $cRepo
     */
    public function handleSearchClient(Request $request, ClientRepository $cRepo){
        // dump($request->request->get('form')['query']);die;
        $searchInput = $request->request->get('form')['Rechercher'];
        if($searchInput){
            $fClients = $cRepo->findBy([ 'nom' =>  $searchInput]);
        }
        // dump($fuser);die;
        
        return $this->render('admin/list_utilisateur.html.twig', [
            'clients' => $fClients
        ]);
    }

}