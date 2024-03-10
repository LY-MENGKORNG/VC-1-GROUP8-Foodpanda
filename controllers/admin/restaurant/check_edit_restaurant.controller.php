<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["restaurant_name"]) && !empty($_POST["owner_id"]) && !empty($_POST["email"]) && 
        !empty($_POST["location"]) && !empty($_POST["contact_info"]) && !empty($_FILES["restaurant_img"]) &&
        !empty($_POST["description"] && !empty($_POST["restaurant_id"]) && $_FILES["restaurant_img"]["error"] == 0 && 
        !empty($_POST["restaurant_img"]))
    ){
        $rest_id = $_POST["restaurant_id"];
        $rest_name = $_POST["restaurant_name"];
        $owner_id = $_POST["owner_id"];
        $email = $_POST["email"];
        $location = $_POST["location"];
        $contact_info = $_POST["contact_info"];
        $restaurant_img = $_FILES["restaurant_img"];
        $desc = $_POST["description"];
        $target_dir = "assets/images/uploads/restaurants/";
        $current_img = $_POST["restaurant_img"];

        changeImage($target_dir, $restaurant_img, $current_img);
        editRestaurant($rest_id, $rest_name, $owner_id, $email, $location, $contact_info, $restaurant_img["name"], $desc);
        header("Location: /admin/restaurant_detail");
    }
}