<?php
session_start();
require "./models/customer.model.php";

if (isset($_SESSION["customer"])) {
  $customer = $_SESSION["customer"];
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$page = "";
$routes = [
    '/foodpanda' => "foodpanda.php",
    '/customer' => 'controllers/home/home.controller.php',
    '/customer/checkout' => 'controllers/checkout/checkout.controller.php',
    '/customer/favorite' => 'controllers/favorites/favorite.controller.php',
    '/customer/order' => 'controllers/orders/order.controller.php',
    '/customer/profile' => 'controllers/profiles/profile.controller.php',
    '/customer/restaurant' => 'controllers/restaurant/restaurant.controller.php',
    '/customer/search' => 'controllers/search/search.controller.php',
    '/customer/offers' => 'controllers/offer/customer_offer.controller.php',
];
if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
    http_response_code(404);
    $page = 'views/errors/404.php';
}

require "./layouts/customer/header.php";
require "./layouts/customer/navbar.php";
require $page;
require "./layouts/customer/footer.php";
