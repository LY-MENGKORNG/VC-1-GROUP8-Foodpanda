<?php
$owner_id = $restaurant_owner["user_id"];
$restaurant_id = getRestaurantByOwner($owner_id)["restaurant_id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(($_POST["cate_name"])) && !empty($_FILES["image"]) &&  !empty($_POST["description"])) {
        $cate_name = $_POST["cate_name"];
        $description = $_POST["description"];
        $cate_img = $_FILES["image"];
        $path_dir = "assets/images/uploads/restaurants/categories/";

        addImageFolder($cate_img, $path_dir);
        createCategory(intval($restaurant_id), $cate_name, $description, $cate_img['name']);
        header("Location: /restaurant/category");
    }
}