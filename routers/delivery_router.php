<?php
require "./models/delivery.model.php";

if (isset($_SESSION["delivery"])) {
    $delivery = $_SESSION["delivery"];
    $page = "";
    $routes = [
        '/delivery' => 'controllers/delivery/home/home.controller.php',
        '/delivery/dashboard' => 'controllers/delivery/home/home.controller.php',
        '/delivery/profile' => 'controllers/delivery/profile/profile.controller.php',
        '/delivery/notification' => 'controllers/delivery/notification/notification.controller.php',
        '/delivery/shipping' => 'controllers/delivery/shipping/shipping.controller.php',
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
