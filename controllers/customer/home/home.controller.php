<?php
// unset session variable 
unset($_SESSION["is_customer_email"]);
unset($_SESSION["is_customer_password"]);
unset($_SESSION["is_customer"]);
$categories = getCategories();
$foods = getFoodsInfo();
$food_selling_products = topSellingProduct();
require "./views/customer/home/home.view.php";