<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MangaController extends AbstractController
{
    /**
     * @Route("/manga", name="manga")
     */
    public function index(): Response
    {
        return $this->render('manga/index.html.twig', [
            'controller_name' => 'MangaController',
        ]);
    }
}
