<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/admin-signup' => 'views/signup/admin_signup.view.php',
    '/admin-signin' => 'views/signin/admin_signin.view.php',
    '/admin' => 'controllers/admin/admin.controller.php',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
}else {
    
}

$page = array_key_exists($uri, $routes) ? $routes[$uri] : "views/errors/404.php";

require "layouts/admin/header.php";
require "layouts/admin/navbar.php";
require $page;
require "layouts/admin/footer.php";