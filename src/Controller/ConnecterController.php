<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnecterController extends AbstractController
{
    #[Route('/connecter', name: 'app_connecter')]
    public function index(): Response
    {
        return $this->render('connecter/index.html.twig', [
            'controller_name' => 'ConnecterController',
        ]);
    }
}
