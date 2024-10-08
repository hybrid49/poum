<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class DefaultController extends AbstractController
{

    #[Route('/', name: 'app_client_login')]
    public function accueil(): Response
    {

        return $this->render('login.html.twig');
    }
}