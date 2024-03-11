<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $food_id = $_POST["food_id"];
    $all_food_info = getFoodsInfo();
    $foods_info = getFoodInfoById($food_id);

    require "./views/customer/restaurant/restaurant.view.php";
}else {
    header("Location: /customer");
}