<?php
// session_start();
require_once __DIR__ . '/../vendor/autoload.php';
use App\Core\Router;
require_once __DIR__ . '/../routes/route.web.php';

Router::resolve($routes);

