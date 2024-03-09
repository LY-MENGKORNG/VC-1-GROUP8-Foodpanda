<?php
$categories = getCategory();
$owner_id = $restaurant_owner["user_id"];
$restaurants = getRestaurantByOwner($owner_id);
if ($restaurants) {
    $restaurant_id = $restaurants["restaurant_id"];
    $categories = array_filter($categories, function ($item) {
        global $restaurant_id;
        return $item["restaurant_id"] == $restaurant_id;
    });
}else {
    $categories = [];
}
require "./views/restaurant/category/category.view.php";