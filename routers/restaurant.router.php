<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/check_user.controller.php',
    '/res-restaurant' => 'controllers/signup/restaurant.controller.php' ,
    '/restaurant-signup' => 'views/signup/restaurant_signup.view.php',
    '/restaurant-signin' => 'views/signin/restaurant_signin.view.php',
    // '/restaurant-signout' => '',
    '/restaurant' => 'controllers/restaurant/restaurant.controller.php'

];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}

// $page = array_key_exists($uri, $routes) ? $routes[$uri] : "views/errors/404.php";

require $page;