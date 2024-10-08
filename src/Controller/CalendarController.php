<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class CalendarController extends AbstractController
{

    #[Route('/calendar', name: 'app_client_calendar')]
    public function calendar(): Response
    {
        return $this->render('calendar.html.twig');
    }
}