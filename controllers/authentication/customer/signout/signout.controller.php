<?php
$is_customer_email = isset($_SESSION["is_customer_email"]) ? $_SESSION['is_customer_email'] : "";
$is_customer_password = isset($_SESSION["is_customer_password"]) ? $_SESSION['is_customer_password'] : "";
require "./views/authentication/signout/customer_signout.php";