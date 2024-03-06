<?php
session_start();
ob_start();
require "./models/delivery.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (isset($_SESSION["delivery"])) {
    $delivery = $_SESSION["delivery"];
    $page = "";
    $routes = [
        '/delivery' => 'controllers/delivery/home/home.controller.php',
    ];

    if (array_key_exists($uri, $routes)) { 
        $page = $routes[$uri];
    } else {
        http_response_code(404);
        $page = 'views/errors/404.php';
    }
    require "./layouts/delivery/header.php";
    require "./layouts/delivery/navbar.php";
    require "./layouts/delivery/navbar2.php";
    require $page;
    require "./layouts/delivery/footer.php";
}else {
    header("Location: /delivery/signin");
}
