<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/check_user.controller.php',
    '/ad-admin' => 'controllers/signup/admin_signup.controller.php',
    '/admin-signup' => 'views/signup/admin_signup.view.php',
    '/admin-signin' => 'views/signin/admin_signin.view.php',
    '/admin-signout' => 'views/signout/admin_signout.view.php',
    '/admin' => 'controllers/admin/admin.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}

// $page = array_key_exists($uri, $routes) ? $routes[$uri] : "views/errors/404.php";

require $page;