<?php
$owner_id = $restaurant_owner["user_id"];
$restaurant_id = getRestaurantByOwner($owner_id)["restaurant_id"];
echo "hi";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(($_POST["cate_name"])) && !empty($_POST["description"])) {
        $cate_name = $_POST["cate_name"];
        $description = $_POST["description"];

        createCategory(intval($restaurant_id), $cate_name, $description);
        header("Location: /restaurant/category");
    }
}
