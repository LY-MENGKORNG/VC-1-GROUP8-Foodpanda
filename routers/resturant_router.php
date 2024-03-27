<?php
require "./models/restaurant.model.php";

if (isset($_SESSION["restaurant_owner"])) {
    $restaurant_owner = $_SESSION["restaurant_owner"];

    // if ($uri = "/restaurant") {
    //     header("Location: /restaurant/category");
    // }

    $page = "";
    $routes = [
        '/restaurant' => 'controllers/restaurant/home/home.controller.php',
        '/restaurant/category' => 'controllers/restaurant/category/category.controller.php',
        '/restaurant/add_category' => 'controllers/restaurant/category/add_category.controller.php',
        '/restaurant/edit_category' => 'controllers/restaurant/category/edit_category.controller.php',
        '/restaurant/delete_category' => 'controllers/restaurant/category/delete_category.controller.php',

        '/restaurant/delivery' => 'controllers/restaurant/delivery/delivery.controller.php',
        '/restaurant/order' => 'controllers/restaurant/order/order.controller.php',
        '/restaurant/food' => 'controllers/restaurant/food/food.controller.php',
        '/restaurant/edit_food' => 'controllers/restaurant/food/edit_food.controller.php',
        '/restaurant/delete_food' => 'controllers/restaurant/food/delete_food.controller.php',
        '/restaurant/add_food' => 'controllers/restaurant/food/create_food.controller.php',
        '/restaurant/profile' => 'controllers/restaurant/profile/profile.controller.php',
        '/restaurant/edit_profile' => 'controllers/restaurant/profile/edit_profile.controller.php',
        '/restaurant/add_delivery' => 'controllers/restaurant/delivery/check_add_delivery.controller.php',
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
