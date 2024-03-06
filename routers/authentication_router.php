<?php
require "./models/admin.model.php";
require "./models/customer.model.php";
require "./models/restaurant.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$page = "";
$routes = [
    "/" => "foodpanda.php",
    '/foodpanda' => 'foodpanda.php',

    '/admin/signup' => 'controllers/authentication/admin/signup/signup.controller.php',
    '/admin/check-signup' => 'controllers/authentication/admin/signup/check_signup.controller.php',
    '/admin/signin' => 'controllers/authentication/admin/signin/signin.controller.php',
    '/admin/check-signin' => 'controllers/authentication/admin/signin/check_signin.controller.php',
    '/admin/signout' => 'controllers/authentication/admin/signout/signout.controller.php',
    '/admin/check-signout' => 'controllers/authentication/admin/signout/check_signout.controller.php',

    '/restaurant/signin' => 'controllers/authentication/restaurant/signin/signin.controller.php',
    '/restaurant/check_signin' => 'controllers/authentication/restaurant/signin/check_signin.controller.php',
    '/restaurant/signout' => 'controllers/authentication/restaurant/signout/signout.controller.php',
    '/restaurant/check_signout' => 'controllers/authentication/restaurant/signout/check_signout.controller.php',

    '/customer/check-signup' => 'controllers/authentication/customer/signup/check_signup.controller.php',
    '/customer/signin' => 'controllers/authentication/customer/signin/signin.controller.php',
    '/customer/check-signin' => 'controllers/authentication/customer/signin/check_signin.controller.php',
    '/customer/signout' => 'controllers/authentication/customer/signout/signout.controller.php',
    '/customer/check-signout' => 'controllers/authentication/customer/signout/check_signout.controller.php',

    '/delivery/signin' => 'controllers/authentication/delivery/signin/signin.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
    http_response_code(404);
    $page = 'views/errors/404.php';
}
require $page;
