<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/admin' => 'controllers/admin/admin.controller.php',
    '/trainer-review' => 'controllers/reviews/review.controller.php',
    '/trainer-classroom' => 'controllers/classroom/classroom.controller.php',
];

$page = array_key_exists($uri, $routes) ? $routes[$uri] : "views/errors/404.php";

require "layouts/admin/header.php";
require "layouts/admin/navbar.php";
require $page;
require "layouts/admin/footer.php";