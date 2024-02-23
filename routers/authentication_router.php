<?php
require "./models/admin.model.php";
require "./models/customer.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($uri === "/") {
    require "./controllers/users/check_user.controller.php";
}

$page = "";
$routes = [
    '/foodpanda' => 'foodpanda.php',

    '/admin/signup' => 'controllers/signup/admin_signup.controller.php',
    // '/admin/check-signup' => 'controllers/signup/admin_check_signup.controller.php',
    '/admin/signin' => 'controllers/signin/admin_signin.controller.php',
    '/admin/check-signin' => 'controllers/signin/admin_check_signin.controller.php',
    '/admin/signout' => 'controllers/signout/admin_signout.controller.php',
    '/admin/check-signout' => 'controllers/signout/admin_check_signout.controller.php',

    '/customer/check-signup' => 'controllers/signup/customer_signup/check_signup.controller.php',
    '/customer/signin' => 'controllers/signup/customer_signup/customer-signin.controller.php',
    '/customer/check-signin' => 'controllers/signin/customer/customer_check_signin.controller.php',
    '/customer/signout' => 'controllers/signout/customer_signout/customer_check_signout.controller.php'
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require $page;
