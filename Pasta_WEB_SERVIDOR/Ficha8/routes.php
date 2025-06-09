<?php

require_once 'controllers/AuthController.php';
require_once 'controllers/PlanoController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/BookController.php';


return [
    'defaultRoute' => ['GET', 'BookController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout' => ['GET', 'AuthController', 'logout'],
    ],
    'plano' => [
        'index' => ['GET', 'PlanoController', 'index'],
        'calcular' => ['POST', 'PlanoController', 'calcular'],
    ],
    'home' => [
        'index' => ['GET', 'HomeController', 'index'],
    ],
    'book' => [
        'index' => ['GET', 'BookController', 'index'],
        'show' => ['GET', 'BookController', 'show'],
        'edit' => ['GET', 'BookController', 'edit'],
        'delete' => ['GET', 'BookController', 'delete'],
        'create' => ['GET', 'BookController', 'create'],
        'store' => ['POST', 'BookController', 'store'],
        'update' => ['POST', 'BookController', 'update'],
    ],
    'error' => [
        'notFound' => ['GET', 'BookController', 'show'],
    ]];
