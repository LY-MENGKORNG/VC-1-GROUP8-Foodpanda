<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (
        !empty($_POST['restaurant_name']) && !empty($_POST["email"]) && 
        !empty($_POST["location"]) && !empty($_POST["contact_info"]) && 
        !empty($_FILES["restaurant_img"]) && !empty($_POST["description"] && 
        !empty($_POST["owner_id"]))
    ) {
        $rest_name = htmlspecialchars($_POST["restaurant_name"]);
        $email = htmlspecialchars(trim($_POST["email"]));
        $location = htmlspecialchars($_POST["location"]);
        $contact = htmlspecialchars($_POST["contact_info"]);
        $desc = htmlspecialchars($_POST["description"]);
        $img = $_FILES["restaurant_img"];
        $owner_id = $_POST["owner_id"];

        $target_dir = "assets/images/uploads/restaurants/";
        
        if (checkImage($img, $target_dir)) {
            if (createRestaurant(intval($owner_id), $rest_name, $location, $email, $contact, $img["name"], $desc)) 
            {                                                                                  
                addImageFolder($img, $target_dir);
            }
        }
        header("Location: /admin/manage_restaurant");
    }
}
