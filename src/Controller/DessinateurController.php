<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DessinateurController extends AbstractController
{
    /**
     * @Route("/dessinateur", name="dessinateur")
     */
    public function index(): Response
    {
        return $this->render('dessinateur/index.html.twig', [
            'controller_name' => 'DessinateurController',
        ]);
    }
}
