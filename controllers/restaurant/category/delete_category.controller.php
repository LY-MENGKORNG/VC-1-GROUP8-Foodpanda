<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["cate_id"];
    $path_dir = "assets/images/uploads/restaurants/categories/";
    $cate_img = getCateById($id)["cate_img"] ? getCateById($id)["cate_img"] : false;
    if ($cate_img) {
        deleteImage($path_dir . $cate_img);
    }
    deleteCategory($id);
    header("Location: /restaurant/category");
}