<?php

// src/Controller/ProgramController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/', name: 'program')]
Class ProgramController extends AbstractController
{
    #[Route('/program', name: 'index')]
    public function index(): Response
    {
//
            $wildSeries = '<!doctype html><html lang="en"><title>Wild Series</title><body>Wild Series Index</body></html>';
//
//        );
        return $this->render('index.html.twig', [
            'website' => $wildSeries,
        ]);
    }
}
