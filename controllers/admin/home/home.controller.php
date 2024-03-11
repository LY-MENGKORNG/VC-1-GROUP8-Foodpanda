<?php
// unset session variable
unset($_SESSION["is_admin_email"]);
unset($_SESSION["is_admin_password"]);

$restaurant_info = getRestaurantInfo();
require "./views/admin/home/home.view.php";
