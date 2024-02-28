<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        !empty($_POST['restaurant_name']) && !empty($_POST["email"]) && 
        !empty($_POST["password"]) && !empty($_POST["location"]) &&
        !empty($_POST["contact_info"]) && !empty($_FILES["restaurant_img"]) && 
        !empty($_POST["description"])
    ) {

        $rest_name = htmlspecialchars($_POST["restaurant_name"]);
        $email = htmlspecialchars(trim($_POST["email"]));
        $location = htmlspecialchars($_POST["location"]);
        $password = htmlspecialchars($_POST["password"]);
        $password_encrypt = password_hash($password, PASSWORD_BCRYPT);
        $contact = htmlspecialchars($_POST["contact_info"]);
        $desc = htmlspecialchars($_POST["description"]);
        $img = $_FILES["restaurant_img"];

        var_dump($img["size"]);
        if (checkRestaurantImage($img)) {
            if (createRestaurant($rest_name, $location, $email, $password_encrypt, 
                                $contact, $img["name"], $desc)) 
            {                                                                                  
                addRestaurantImgToFolder($img);
            }
        }
        header("Location: /admin/manage_restaurant");
    }
}
