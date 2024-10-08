<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class DashboardController extends AbstractController
{

    #[Route('/dashboard', name: 'app_client_accueil')]
    public function accueil(): Response
    {

        return $this->render('base.html.twig');
    }
}
