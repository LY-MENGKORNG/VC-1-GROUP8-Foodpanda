<?php
session_start();
// ob_start();
require "./models/restaurant.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if (isset($_SESSION["restaurant_owner"])) {
    $restaurant_owner = $_SESSION["restaurant_owner"];
    $page = "";
    $routes = [
        '/restaurant' => 'controllers/restaurant/home/home.controller.php',
        '/restaurant/category' => 'controllers/restaurant/menu_item/menu_item.controller.php',
        '/restaurant/delivery' => 'controllers/restaurant/delivery/delivery.controller.php',
        '/restaurant/customer' => 'controllers/restaurant/customer/customer.controller.php',
        '/restaurant/food' => 'controllers/restaurant/food/food.controller.php',
        '/restaurant/check_add_category' => 'controllers/restaurant/menu_item/add_menu_item.controller.php',
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
    header("Location: /restaurant/signin");
}
