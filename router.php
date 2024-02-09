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

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}
require "layouts/header.php";
require "layouts/navbar.php";
require $page;
require "layouts/footer.php";
