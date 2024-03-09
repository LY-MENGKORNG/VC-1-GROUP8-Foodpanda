<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["item_id"];
    $path_dir = "assets/images/uploads/restaurants/categories/";
    $item_img = getCateById($id)["item_img"] ? getCateById($id)["item_img"] : false;
    if ($item_img) {
        deleteImage($path_dir . $item_img);
    }
    deleteCategory($id);
    header("Location: /restaurant/category");
}