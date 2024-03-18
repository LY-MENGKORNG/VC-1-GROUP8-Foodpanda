
<?php
header('Cache-Control: no cache');
if (!empty(($_POST["food_id"])) || isset($_SESSION["foods_info"])) {
    $food_id = isset($_POST["food_id"]) ? $_POST["food_id"] : $_SESSION["foods_info"]["food_id"];
    $foods_info = getFoodInfoById($food_id);
    $_SESSION["foods_info"] = $foods_info;
    $restaurant_id = $foods_info["restaurant_id"];
    $restaurants = getFoodInfoByRestaurantId($restaurant_id);
    $user_id = $customer["user_id"];
}   
require "./views/customer/restaurant/restaurant.view.php";