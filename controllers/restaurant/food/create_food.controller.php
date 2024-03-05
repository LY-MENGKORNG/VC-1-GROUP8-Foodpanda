<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["item_id"]) && !empty($_POST["food_name"]) && !empty($_FILES["image"]) &&
        !empty($_POST["quantity"]) && !empty($_POST["price"]) && !empty($_POST["rating"]))
    {

        $item_id = htmlspecialchars($_POST["item_id"]);
        $food_name = htmlspecialchars($_POST["food_name"]);
        $image = $_FILES["image"];
        $quantity = htmlspecialchars($_POST["quantity"]);
        $price = htmlspecialchars($_POST["price"]);
        $rating = htmlspecialchars($_POST["rating"]);

        $target_dir = "assets/images/uploads/restaurants/foods/";

        if (checkImage($image, $target_dir)) {
            if(createFood($item_id, $food_name, $image["name"], $quantity, $price, $rating)) {
                addImageFolder($image, $target_dir);
            }
       }
        header("Location: /restaurant/food"); 
    }

}