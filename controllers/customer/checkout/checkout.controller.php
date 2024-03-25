
<?php
$foods_info = isset($_SESSION["foods_info"]) ? $_SESSION["foods_info"] : [];
$deliveries = getAllUsers(3);
$addresses = getAddress(intval($customer["user_id"]));
require "./views/customer/checkout/checkout.view.php";