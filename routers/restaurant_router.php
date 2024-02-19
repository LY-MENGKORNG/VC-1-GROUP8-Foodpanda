<?php
require "./models/restaurant.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($uri === "/restaurant") {
    require "./controllers/restaurant/restaurant.controller.php";
}

$page = "";
$routes = [
    '/restaurant' => 'controllers/restaurant/restaurant.controller.php',
    '/restaurant/dashboard' => 'controllers/restaurant/dashboard.controller.',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}

if ($uri == "/restaurant/signup" || $uri == "/restaurant/signin" || $uri == "/restaurant/check-signup" ||
    $uri == "/restaurant/check-signin") {
    require $page;

}else {
    require "./layouts/restaurant/header.php";
    require "./layouts/restaurant/navbar.php";
    require $page;
    require "./layouts/restaurant/footer.php";
}


?>