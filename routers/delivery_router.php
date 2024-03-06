<?php
session_start();
ob_start();
require "./models/delivery.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (isset($_SESSION["delivery"])) {
    $restaurant_owner = $_SESSION["delivery"];
    $page = "";
    $routes = [
        '/delivery' => 'controllers/restaurant/home/home.controller.php',
    ];

    if (array_key_exists($uri, $routes)) { 
        $page = $routes[$uri];
    } else {
        http_response_code(404);
        $page = 'views/errors/404.php';
    }
    require "./layouts/restaurant/header.php";
    require "./layouts/restaurant/navbar.php";
    require "./layouts/restaurant/navbar2.php";
    require $page;
    require "./layouts/restaurant/footer.php";
}else {
    header("Location: /delivery/signin");
}
