<?php
require "./models/delivery.model.php";

if (isset($_SESSION["delivery"])) {
    if ($uri == "/delivery") {
        header("Location: /delivery/shipping");
    }

    $delivery = $_SESSION["delivery"];
    $page = "";
    $routes = [
        '/delivery' => 'controllers/delivery/home/home.controller.php',
        '/delivery/profile' => 'controllers/delivery/profile/profile.controller.php',
        '/delivery/edit_profile' => 'controllers/delivery/profile/edit_profile.controller.php',
        '/delivery/notification' => 'controllers/delivery/notification/notification.controller.php',
        '/delivery/shipping' => 'controllers/delivery/shipping/shipping.controller.php',
        '/delivery/order' => 'controllers/delivery/order/order.controller.php',
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
