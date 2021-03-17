<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EditeurController extends AbstractController
{
    /**
     * @Route("/editeur", name="editeur")
     */
    public function index(): Response
    {
        return $this->render('editeur/index.html.twig', [
            'controller_name' => 'EditeurController',
        ]);
    }
}
