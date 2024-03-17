<?php
if (isset($_POST["food_id"])) {
    $food_id = $_POST["food_id"];
    $all_food_info = getFoodsInfo();
    $foods_info = getFoodInfoById($food_id);
    $restaurant_id = $foods_info["restaurant_id"];
    $restaurants = getFoodInfoByRestaurantId($restaurant_id);
    $checkout = getCheckout();
}

require "./views/customer/checkout/checkout.view.php";