<?php
// unset session variable 
unset($_SESSION["is_customer_email"]);
unset($_SESSION["is_customer_password"]);
$categories = getCategories();
$foods = getFoodsInfo();
require "./views/customer/home/home.view.php";