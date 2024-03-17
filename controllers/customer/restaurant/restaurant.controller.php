<?php
$checkout = getCheckout();
if (!empty(($_POST["food_id"]))) {
    $food_id = $_POST["food_id"];
    $all_food_info = getFoodsInfo();
    $foods_info = getFoodInfoById($food_id);
    $restaurant_id = $foods_info["restaurant_id"];
    $restaurants = getFoodInfoByRestaurantId($restaurant_id);
    $food = getFoodInfoById($food_id);
    $user_id = $customer["user_id"]; 
    $food_name = $food["food_name"];
    $quantity = 1;
    $price = $food["price"];
    addCart($food_id, $restaurant_id, $user_id, $food_name, $quantity, $price);
}   
require "./views/customer/restaurant/restaurant.view.php";