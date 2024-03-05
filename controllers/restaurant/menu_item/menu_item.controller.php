<?php
$category = getCategory();
$owner_id = $restaurant_owner["user_id"];
$restaurant_id = getRestaurantByOwner($owner_id)["restaurant_id"];

$category = array_filter($category, function ($item) {
    global $restaurant_id;
    return $item["restaurant_id"] == $restaurant_id;
});
require "./views/restaurant/menu_item/menu_item.view.php";