<?php


// src/Controller/LoginController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function login(): Response
    {
       // ...
    }
}