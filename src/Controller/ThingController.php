<?php

namespace App\Controller;

use App\Entity\Thing;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ThingController extends AbstractController
{
    /**
     * @Route("/things", name="things-index", methods={"GET"})
     */
    public function index(Request $request): Response
    {
        $searchedThings = ["asdasd", "qweqweqw", "zxczxczxcz", "wertertert", "dfgdfgdfg", "xcbcvbcvbn"];
        return $this->render('things/index.html.twig', ["things" => $searchedThings]);
    }

    /**
     * @Route("/things/create", name="things-create", methods={"GET"})
     */
    public function create(): Response
    {
        return $this->render('things/create.html.twig');
    }

    /**
     * @Route("/things", name="things-store", methods={"POST"})
     */
    public function store(Request $request): Response
    {
        // todo validation

        $entityManager = $this->getDoctrine()->getManager();

        $thing = new Thing($request->get('name'), $request->get('description'));

        $entityManager->persist($thing);
    }

    /**
     * @Route("/things/{id}", name="things-show", methods={"GET"})
     */
    public function show(Request $request): Response
    {
        $thing = "qwertyuipasdfghjkl";
        return $this->render('things/show.html.twig', ["thing" => $thing]);
    }

    /**
     * @Route("/things/edit/{id}", name="things-edit", methods={"GET"})
     */
    public function edit(Request $request): Response
    {
        return $this->render('things/edit.html.twig');
    }

    /**
     * @Route("/things", name="things-update", methods={"PUT"})
     */
    public function update(Request $request): Response
    {
        // todo validation

        $entityManager = $this->getDoctrine()->getManager();

        $thing = new Thing($request->get('name'), $request->get('description'));

        $entityManager->persist($thing);
    }

    /**
     * @Route("/things", name="things-delete", methods={"DELETE"})
     */
    public function delete(Request $request) : Response
    {
        return $this->render('things/edit.html.twig');
    }

}
