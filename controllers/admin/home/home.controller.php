<?php
// unset session variable
unset($_SESSION["is_admin_email"]);
unset($_SESSION["is_admin_password"]);

$restaurant_info = getRestaurantInfo();
$list_orders = listOrders();
$income = 0;
$customers = getAllUsers(4);
$drivers = getAllUsers(3);
$top_category = getTopCate();
for ($i=0; $i < count($list_orders); $i++) { 
    $income += $list_orders[$i]["payment_amount"];
}
require "./views/admin/home/home.view.php";
