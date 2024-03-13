<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food_id = $_POST["food_id"];
    $food_info = getFoodsInfo();
    $foods = getFoodInfoById($food_id);
}
require "./views/customer/checkout/checkout.view.php";