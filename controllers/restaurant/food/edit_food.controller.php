<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
    var_dump($_FILES["food_img"]);
    if (
        !empty(($_POST["food_name"])) && !empty($_POST["current_image"]) && 
        !empty($_POST["food_id"]) && !empty($_POST["cate_id"]) && 
        !empty($_POST["quantity"]) && !empty($_POST["price"]) &&  !empty($_POST["rating"])
    ) {
        $food_name = $_POST["food_name"];
        $image = $_FILES["food_img"];
        $current_image = $_POST["current_image"];
        $food_id = $_POST["food_id"];
        $cate_id = $_POST["cate_id"];
        $quantity = $_POST["quantity"];
        $price = $_POST["price"];
        $rating = $_POST["rating"];
        $path_dir = "assets/images/uploads/restaurants/foods/";

        if (checkImage($image, $path_dir)) {
            changeImage($path_dir, $image, $current_image);
            editFood(intval($food_id), $food_name, $image['name'], intval($price), intval($quantity), intval($rating), intval($cate_id));
        }else {
            editFood(intval($food_id), $food_name, $current_image, intval($price), intval($quantity), intval($rating), intval($cate_id));
        }
    }
    header("Location: /restaurant/food");   
}