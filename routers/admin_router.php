<?php
require "./models/admin.model.php";

if (isset($_SESSION["admin"])) {
    $admin = $_SESSION["admin"];

    $page = "";
    $routes = [
        '/admin' => 'controllers/admin/home/home.controller.php',
        '/admin/dashboard' => 'controllers/admin/dashboard.controller.',
        '/admin/profile' => 'controllers/admin/profile/profile.controller.php',
        '/admin/edit_profile' => 'controllers/admin/profile/edit_profile.controller.php',
        '/admin/manage_restaurant' => 'controllers/admin/restaurant/manage_restaurant.controller.php',
        '/admin/check_add_restaurant' => 'controllers/admin/restaurant/check_add_restaurant.controller.php',
        '/admin/category' => 'controllers/category/category.controller.php',
        '/admin/add_restaurant' => 'controllers/admin/restaurant/add_restaurant.controller.php',
        '/admin/restaurant_owner' => 'controllers/admin/restaurant/restaurant_owner.controller.php',
        '/admin/check_add_restaurant_owner' => 'controllers/admin/restaurant/check_add_restaurant_owner.controller.php',
        '/admin/restaurant_detail' => 'controllers/admin/restaurant/restaurant_detail.controller.php',
        '/admin/edit_restaurant' => 'controllers/admin/restaurant/check_edit_restaurant.controller.php',
    ];

    if (array_key_exists($uri, $routes)) {
        $page = $routes[$uri];
    } else {
        http_response_code(404);
        $page = 'views/errors/404.php';
    }
    require "./layouts/admin/header.php";
    require "./layouts/admin/navbar.php";
    require "./layouts/admin/navbar2.php";
    require $page;
    require "./layouts/admin/footer.php";
    
}else {
    header("Location: /admin/signin");
    die();
}
