<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Admin;
use App\Entity\Categorie;
use App\Entity\Dessinateur;
use App\Entity\Editeur;
use App\Entity\Manga;
use App\Entity\Personne;
use App\Entity\Scenariste;
use App\Entity\Serie;


class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        //return parent::index();
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(CategorieCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mangatheque Pat');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::section('Menu');

        yield MenuItem::linkToCrud('Editeur', 'fa fa-tags', Editeur::class);
        yield MenuItem::linkToCrud('Manga', 'fa fa-tags', Manga::class);
        yield MenuItem::linkToCrud('Dessinateur', 'fa fa-tags', Dessinateur::class);
        yield MenuItem::linkToCrud('Categories', 'fa fa-tags', Categorie::class);
        yield MenuItem::linkToCrud('Personne', 'fa fa-tags', Personne::class);
        yield MenuItem::linkToCrud('Scenariste', 'fa fa-tags', Scenariste::class);
        yield MenuItem::linkToCrud('Serie', 'fa fa-tags', Serie::class);
    }
}


