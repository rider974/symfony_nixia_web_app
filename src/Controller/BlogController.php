<?php 

// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;



class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_list', priority:5)]
    public function list(Request $request ): Response
    {
        $routeName = $request->attributes->get('_route');
        $routeParameters = $request->attributes->get('_route_params');

        // use this to get all the available attributes (not only routing ones):
       
       
            // return a template which 
            return $this->render('blog/index.html.twig',['controller_name' => 'BlogController',]);
            // redirect to a new route name 
           // return $this->redirectToRoute('api_post_show');
        
        // ...
    }
    #[Route('/api/posts/{id}', name: 'api_post_show')]
    public function show(): Response
    {
        return $this->render('blog/index.html.twig');
    }
}