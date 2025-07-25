<?php
use Src\Controller\SecurityController;

$routes = [


    '' => [
        'controller' => SecurityController::class,
        'method' => 'index'
    ],
 
    'createcompte' => [
        'controller' => SecurityController::class,
        'method' => 'createcompte'
    ],
    'accueil' => [
        'controller' => SecurityController::class,
        'method' => 'accueil',


    ],
];