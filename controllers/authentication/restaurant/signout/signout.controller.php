<?php
session_start();
$is_restaurant_owner_email = isset($_SESSION['is_restaurant_owner_email'])?$_SESSION['$is_restaurant_owner_email']: "";
$is_restaurant_owner_password = isset($_SESSION["is_restaurant_owner_password"]) ? $_SESSION['is_restaurant_owner_password'] : "";
require "./views/signout/restaurant_signout.php";
