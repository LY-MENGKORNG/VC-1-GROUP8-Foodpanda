<?php
session_start();
require "./models/restaurant.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (isset($_SESSION["restaurant"])) {
    $restaurant = $_SESSION["restaurant"];

    $page = "";
    $routes = [
        '/restaurant' => 'controllers/restaurant_owner/restaurant_owner.controller.php',
    ];

    if (array_key_exists($uri, $routes)) {
        $page = $routes[$uri];
    } else {
        http_response_code(404);
        $page = 'views/errors/404.php';
    }

    require "./layouts/restaurant/header.php";
    require "./layouts/restaurant/navbar.php";
    require $page;
    require "./layouts/restaurant/footer.php";
}
