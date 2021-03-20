<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/adminnn", name="admin")
     */
    public function index(): Response
    {
        return $this->render('adminnn/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
