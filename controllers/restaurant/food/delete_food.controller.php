<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["food_id"];
    $path_dir = "assets/images/uploads/restaurants/foods/";
    $image= getCateById($id)["image"] ? getCateById($id)["image"] : false;
    if ($image) {
        deleteImage($path_dir . $image);
    }
    deleteFood($id);
    header("Location: /restaurant/food");
}