<?php
$categories = getCategory();
$owner_id = $restaurant_owner["user_id"];
$restaurant_id = getRestaurantByOwner($owner_id)["restaurant_id"];

$categories = array_filter($categories, function ($item) {
    global $restaurant_id;
    return $item["restaurant_id"] == $restaurant_id;
});
require "./views/restaurant/category/category.view.php";