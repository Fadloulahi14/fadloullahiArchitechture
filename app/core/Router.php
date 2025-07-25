<?php

namespace App\Core;

class Router
{
    public static function resolve(array $route): void {
    //    $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/' );

       
    //    if ($uri === '/') {
    //        $uri = '/';
           

    //    }
    //    if (!isset($routes[$uri])) {
    //     // var_dump($uri);
    //     // die("Route not found: " . $uri);
    //        http_response_code(404);
    //        echo "404 Not Found";
    //        return;
    //    }
    //   $controllerName = $routes[$uri]['controller'];
    //   $actionName = $routes[$uri]['action'];
    //   if (!class_exists($controllerName)) {
    //       http_response_code(404);

    //       echo "404 Not Found";
    //       return;
    //   }
    //   $controller = new $controllerName();
    //   if (!method_exists($controller, $actionName)) {
    //       http_response_code(404);

    //       echo "404 Not Found";
    //       return;
    //   }
    //   $controller->$actionName();
    $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
    $Uris = trim($requestUri, '/');
   

       



  
    if (isset($route[$Uris])) {
        
        $route = $route[$Uris];
        $controllerClass = $route['controller'];

        $method = $route['method'];
        $controller = new $controllerClass();
        $controller->$method();
    } else {
       echo "404 Not Found";
    }
   }

}
