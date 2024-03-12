<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(($_POST["food_id"]))) {
        $food_id = $_POST["food_id"];
        $all_food_info = getFoodsInfo();
        $foods_info = getFoodInfoById($food_id);
        $restaurant_id = $foods_info["restaurant_id"];
        $restaurants = getFoodInfoByRestaurantId($restaurant_id);
        require "./views/customer/restaurant/restaurant.view.php";
        die();
    }
}
header("Location: /customer");