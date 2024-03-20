
<?php
$foods_info = isset($_SESSION["foods_info"]) ? $_SESSION["foods_info"] : [];
$deliveries = getAllUsers(3);
$addresses = getAddress();
require "./views/customer/checkout/checkout.view.php";