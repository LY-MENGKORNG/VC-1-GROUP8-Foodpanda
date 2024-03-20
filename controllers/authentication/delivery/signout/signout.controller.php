<?php 
$is_restaurant_owner_email = isset($_SESSION['is_delivery_owner_email'])?$_SESSION['$is_delivery_owner_email']: "";
$is_restaurant_owner_password = isset($_SESSION["is_delivery_owner_password"]) ? $_SESSION['is_delivery_owner_password'] : "";
require "./views/authentication/signout/delivery_signout.php";