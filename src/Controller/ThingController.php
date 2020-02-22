<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThingController extends AbstractController
{
    /**
     * @Route("/things", name="things-index")
     */
    public function index(Request $request) : Response
    {
        $things = ["asdasd", "qweqweqw", "zxczxczxcz", "wertertert", "dfgdfgdfg", "xcbcvbcvbn"];
        return $this->render('things/index.html.twig', ["things" => $things]);
    }

}
