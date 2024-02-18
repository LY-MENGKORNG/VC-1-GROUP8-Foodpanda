<?php
require "./models/admin.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

if ($uri === "/admin") {
    require "./controllers/users/check_user.controller.php";
}

$page = "";
$routes = [
    '/admin' => 'controllers/admin/admin.controller.php',
    '/admin/dashboard' => 'controllers/admin/dashboard.controller.',
];

if (array_key_exists($uri, $routes)) {
    $page = $routes[$uri];
} else {
   http_response_code(404);
   $page = 'views/errors/404.php';
}

if ($uri == "/admin-signup" || $uri == "/admin-signin" || $uri == "/admin-check-signup" ||
    $uri == "/admin-check-signin") {
    require $page;

}else {
    require "./layouts/admin/header.php";
    require "./layouts/admin/navbar.php";
    require $page;
    require "./layouts/admin/footer.php";
}

