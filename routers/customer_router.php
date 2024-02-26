<?php
session_start();
require "./models/customer.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (isset($_SESSION["customer"])) {
    $customer = $_SESSION["customer"];

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$page = "";
$routes = [
    '/foodpanda' => "foodpanda.php",
    '/customer' => 'controllers/customer/home/home.controller.php',
    '/customer/checkout' => 'controllers/customer/checkout/checkout.controller.php',
    '/customer/favorite' => 'controllers/customer/favorites/favorite.controller.php',
    '/customer/order' => 'controllers/customer/orders/order.controller.php',
    '/customer/profile' => 'controllers/customer/profiles/profile.controller.php',
    '/customer/restaurant' => 'controllers/customer/restaurant/restaurant.controller.php',
    '/customer/search' => 'controllers/customer/search/search.controller.php',
    '/customer/offers' => 'controllers/customer/offer/customer_offer.controller.php',
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
}else {
    header("Location: /customer/signin");
}
