<?php
$restaurant_name = getRestaurantByOwner(intval($restaurant_owner["user_id"]))["restaurant_name"];
$orders_list = getAllOrderInRestaurant($restaurant_name);
require "./views/restaurant/order/order.view.php";