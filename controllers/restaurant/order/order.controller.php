<?php
$owner_id = $restaurant_owner["user_id"];
$orders = getAllOrder($owner_id);
var_dump($orders);
require "./views/restaurant/order/order.view.php";