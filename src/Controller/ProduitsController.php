<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class ProduitsController extends AbstractController
{

    #[Route('/stock', name: 'app_client_products_stock_list')]
    public function stock(): Response
    {
        return $this->render('liste_produit.html.twig');
    }

    #[Route('/addProduit', name: 'app_client_products_stock_add_produit')]
    public function addProducts(): Response
    {
        return $this->render('add_produit.html.twig');
    }

    #[Route('/reassort', name: 'app_client_products_reassort')]
    public function reassort(): Response
    {
        return $this->render('calendar.html.twig');
    }
}