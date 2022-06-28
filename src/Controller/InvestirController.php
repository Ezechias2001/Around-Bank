<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InvestirController extends AbstractController
{
    #[Route('/investir', name: 'app_investir')]
    public function index(): Response
    {
        return $this->render('investir/index.html.twig', [
            'controller_name' => 'InvestirController',
        ]);
    }
}
