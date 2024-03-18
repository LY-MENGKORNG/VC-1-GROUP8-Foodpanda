<?php
$orders_progress = getOrders("On progress", intval($customer["user_id"]));
$products = getCheckoutById(intval($customer["user_id"]));
$orders_completed = getOrders("Completed", intval($customer["user_id"]));
$orders_cancel = getOrders("Cancel", intval($customer["user_id"]));

require "./views/customer/orders/order.view.php";