<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @return Response 
     */
    public function index(): Response {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('client.scan_decoder');
        // }
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/custom/{name?}", name="custom")
     * @param Request $req
     * @return Response
     */

    public function custom(Request $req){
        // dump($req);
        
        $name = $req->get('name');
        return $this->render('home/custom.html.twig', [
            'name'  => $name
        ]);
    }
}
