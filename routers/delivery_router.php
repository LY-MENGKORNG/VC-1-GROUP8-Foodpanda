<?php
require "./models/delivery.model.php";

if (isset ($_SESSION["delivery"])) {
    $delivery = $_SESSION["delivery"];
    $orders = getAllOrders(intval($delivery["user_id"]));
    $orders_progress = getAllOrder("On progress", intval($delivery["user_id"]));
    $orders_completed = getAllOrder("Completed", intval($delivery["user_id"]));
    $orders_pending = getAllOrder("Pending", intval($delivery["user_id"]));

    $notifications = getAllNoti($delivery["user_id"]);

    if ($uri == "/delivery") {
        header("Location: /delivery/shipping");
    }

    $page = "";
    $routes = [
        '/delivery' => 'controllers/delivery/home/home.controller.php',
        '/delivery/profile' => 'controllers/delivery/profile/profile.controller.php',
        '/delivery/edit_profile' => 'controllers/delivery/profile/edit_profile.controller.php',
        '/delivery/notification' => 'controllers/delivery/notification/notification.controller.php',
        '/delivery/shipping' => 'controllers/delivery/shipping/shipping.controller.php',
        '/delivery/order' => 'controllers/delivery/order/order.controller.php',
        '/delivery/tracking' => 'controllers/delivery/tracking/tracking.controller.php',
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
} else {
    header("Location: /delivery/signin");
}
