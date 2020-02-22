<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name = "home", methods = "GET")
    */
    public function index(Request $request) : Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController'
        ]);
    }

}