<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/signin' => 'controllers/signin/signin.controller.php',
    '/signup'
];

$page = array_key_exists($uri, $routes) ? $routes[$uri] : "views/errors/404.php";

require $page;
