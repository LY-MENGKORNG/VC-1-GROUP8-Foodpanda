<?php

$page = "";
$routes = [
    "/" => "foodpanda.php",
    '/foodpanda' => 'foodpanda.php',

    '/admin/signup' => 'controllers/authentication/admin/signup/signup.controller.php',
    '/admin/check_signup' => 'controllers/authentication/admin/signup/check_signup.controller.php',
    '/admin/signin' => 'controllers/authentication/admin/signin/signin.controller.php',
    '/admin/check_signin' => 'controllers/authentication/admin/signin/check_signin.controller.php',
    '/admin/signout' => 'controllers/authentication/admin/signout/signout.controller.php',
    '/admin/check_signout' => 'controllers/authentication/admin/signout/check_signout.controller.php',

    '/restaurant/signin' => 'controllers/authentication/restaurant/signin/signin.controller.php',
    '/restaurant/check_signin' => 'controllers/authentication/restaurant/signin/check_signin.controller.php',
    '/restaurant/signout' => 'controllers/authentication/restaurant/signout/signout.controller.php',
    '/restaurant/check_signout' => 'controllers/authentication/restaurant/signout/check_signout.controller.php',

    '/customer/signup' => 'controllers/authentication/customer/signup/signup.controller.php',
    '/customer/check_signup' => 'controllers/authentication/customer/signup/check_signup.controller.php',
    '/customer/signin' => 'controllers/authentication/customer/signin/signin.controller.php',
    '/customer/check_signin' => 'controllers/authentication/customer/signin/check_signin.controller.php',
    '/customer/signout' => 'controllers/authentication/customer/signout/signout.controller.php',
    '/customer/check_signout' => 'controllers/authentication/customer/signout/check_signout.controller.php',
    '/customer/forgot_password' => 'controllers/authentication/forgot_password/forgot_password.controller.php',
    '/customer/send_email' => 'controllers/authentication/forgot_password/send_password_reset.controller.php',
    '/customer/change_password' => 'controllers/authentication/forgot_password/change_password.controller.php',
    '/customer/confirm_password' => 'controllers/authentication/forgot_password/confirm_password.controller.php',

    '/delivery/signin' => 'controllers/authentication/delivery/signin/signin.controller.php',
    '/delivery/check_signin' => 'controllers/authentication/delivery/signin/check_signin.controller.php',
    '/delivery/signout' => 'controllers/authentication/delivery/signout/signout.controller.php',
    '/delivery/check_signout' => 'controllers/authentication/delivery/signout/check_signout.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
    http_response_code(404);
    $page = 'views/errors/404.php';
}
require $page;    
