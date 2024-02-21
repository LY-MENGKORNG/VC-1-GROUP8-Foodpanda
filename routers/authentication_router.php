<?php
require "./models/admin.model.php";
require "./models/restaurant.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/admin/signup' => 'controllers/signup/admin_signup.controller.php',
    '/admin/check-signup' => 'controllers/signup/admin_check_signup.controller.php',
    '/admin/signin' => 'controllers/signin/admin_signin.controller.php',
    '/admin/check-signin' => 'controllers/signin/admin_check_signin.controller.php',
    '/admin/signout' => 'controllers/signout/admin_signout.controller.php',
    '/admin/check-signout' => 'controllers/signout/admin_check_signout.controller.php',
    
    '/restaurant/signup' => 'controllers/signup/restaurant_signup.controller.php',
    '/restaurant/check-signup' => 'controllers/signup/restaurant_check_signup.controller.php',
    '/restaurant/signin' => 'controllers/signin/restaurant_signin.controller.php',
    '/restaurant/check-signin' => 'controllers/signin/restaurant_check_signin.controller.php',
    '/restaurant/signout' => 'controllers/signout/restaurant_signout.controller.php',
    '/restaurant/check-signout' => 'controllers/signout/admin_check_signout.controller.php'
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require $page;
