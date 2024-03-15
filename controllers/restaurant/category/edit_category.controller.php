<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty(($_POST["cate_name"])) && !empty($_POST["description"]) && 
        !empty($_POST["current_img"]) && !empty($_POST["cate_id"])
    ) {
        $cate_name = $_POST["cate_name"];
        $description = $_POST["description"];
        $cate_img = $_FILES["image"];
        $current_img = $_POST["current_img"];
        $cate_id = $_POST["cate_id"];

        $path_dir = "assets/images/uploads/restaurants/categories/";

        if (checkImage($cate_img, $path_dir)) {
            changeImage($path_dir, $cate_img, $current_img);
            editCategory(intval($cate_id), $cate_name, $description, $cate_img['name']);
        }else {
            editCategory(intval($cate_id), $cate_name, $description, $current_img);
        }
        header("Location: /restaurant/category");
    }
}