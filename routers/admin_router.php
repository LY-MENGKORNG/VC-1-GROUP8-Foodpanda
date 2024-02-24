<?php
session_start();
require "./models/admin.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (isset($_SESSION["admin"])) {
    $admin = $_SESSION["admin"];


    $page = "";
    $routes = [
        '/admin' => 'controllers/admin/home/home.controller.php',
        '/admin/dashboard' => 'controllers/admin/dashboard.controller.',
        '/admin/profile' => 'controllers/admin/profile/profile.controller.php',
        '/admin/mange-restaurant' => 'controllers/manage_restaurant/manage_restaurant.controller.php',
        '/admin/category' => 'controllers/category/category.controller.php',
    ];

    if (array_key_exists($uri, $routes)) {
        $page = $routes[$uri];
    } else {
        http_response_code(404);
        $page = 'views/errors/404.php';
    }

    require "./layouts/admin/header.php";
    require "./layouts/admin/navbar.php";
    require $page;
    require "./layouts/admin/footer.php";
    
} else {
    header("Location: /admin/signup");
}
