<?php
require "./models/admin.model.php";
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$page = "";
$routes = [
    '/restaurant' => 'controllers/admin/admin.controller.php',
    '/restaurant/dashboard' => 'controllers/admin/dashboard.controller.',
    '/restaurant/profile' => 'controllers/admin_profile/admin_profile.controller.php',
    '/restaurant/category' => 'controllers/category/category.controller.php',
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
    require "./layouts/restaurant/header.php";
    require "./layouts/restaurant/navbar.php";
    require $page;
    require "./layouts/restaurant/footer.php";
}
