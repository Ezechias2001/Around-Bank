<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MotDePasseOublieController extends AbstractController
{
    #[Route('/mot/de/passe/oublie', name: 'app_mot_de_passe_oublie')]
    public function index(): Response
    {
        return $this->render('mot_de_passe_oublie/index.html.twig', [
            'controller_name' => 'MotDePasseOublieController',
        ]);
    }
}
