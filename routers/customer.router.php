<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$page = "";
$routes = [
    '/' => 'controllers/home/home.controller.php',
    '/checkout' => 'controllers/checkout/checkout.controller.php',
    '/favorite' => 'controllers/favorites/favorite.controller.php',
    '/order' => 'controllers/orders/order.controller.php',
    '/profile' => 'controllers/profiles/profile.controller.php',
    '/restaurant' => 'controllers/restaurant/restaurant.controller.php',
    '/search' => 'controllers/search/search.controller.php',
];

$page = array_key_exists($uri, $routes) ? $routes[$uri] : "views/errors/404.php";

require "layouts/customer/header.php";
require "layouts/customer/navbar.php";
require $page;
require "layouts/customer/footer.php";
