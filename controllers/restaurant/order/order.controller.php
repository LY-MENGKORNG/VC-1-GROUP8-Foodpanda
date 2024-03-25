<?php
<<<<<<< HEAD
$owner_id = $restaurant_owner["user_id"];
$orders = getAllOrder($owner_id);
var_dump($orders);
=======
$restaurant_name = getRestaurantByOwner(intval($restaurant_owner["user_id"]))["restaurant_name"];
$orders_list = getAllOrderInRestaurant($restaurant_name);
>>>>>>> 6c908776ebceedeb04020943dde2eaa44b563beb
require "./views/restaurant/order/order.view.php";