<?php 
// config/routes.php
use App\Controller\BlogController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('blog_list', '/blog')
        // the controller value has the format [controller_class, method_name]
        ->controller([BlogController::class, 'list']);
        
        // if the action is implemented as the __invoke() method of the
        // controller class, you can skip the 'method_name' part:
        // ->controller(BlogController::class)
        // ajouter les chemins vers les requetes HTTP (GET, POST, PUT, DELETE)
    $routes->add('api_post_show', '/api/posts/{id?}')
    //            {id</d+>?1} param  id must be a digit & by default null  OR ! force the param

        ->controller([BlogApiController::class, 'show'])
        ->defaults(['id' => 1])
        // it musts be a digits (match with regex expressions)
        ->requirements(['page' => '\d+'])
        ->methods(['GET'])
    ;
    $routes->add('login', '/login')
        ->controller([LoginController::class, 'login'])
        // type of HTTP request 
        ->methods(['POST'])
    ;   // {id} must be given. 
    $routes->add('api_post_edit', '/api/posts/{id}')
        ->controller([BlogApiController::class, 'edit'])
        ->methods(['PUT'])
        ->requirements(['page' => '\d+'])
    ;
};