<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
class ClientController extends AbstractController
{
    #[Route('/client', name: 'app_client')]
    public function index(Request $request): Response
    {

        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',  
            'username' => 'jane.doe',
        ]);
    }
}
