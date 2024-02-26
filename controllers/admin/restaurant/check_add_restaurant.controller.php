<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        !empty($_POST['restaurant_name']) && !empty($_POST['owner_name']) &&
        !empty($_POST["email"]) && !empty($_POST["opening_hour"]) && !empty($_POST["location"]) &&
        !empty($_POST["contact_info"]) && !empty($_FILES["restaurant_img"]) && !empty($_POST["description"])
    ) {

        $rest_name = htmlspecialchars($_POST["restaurant_name"]);
        $owner = htmlspecialchars($_POST["owner_name"]);
        $email = htmlspecialchars($_POST["email"]);
        $location = htmlspecialchars($_POST["location"]);
        $opening_hour = htmlspecialchars($_POST["opening_hour"]);
        $contact = htmlspecialchars($_POST["contact_info"]);
        $desc = htmlspecialchars($_POST["description"]);
        $img = $_FILES["restaurant_img"];

        $admin_id = getAdmin()[0]["admin_id"];

        if (checkRestaurantImage($img)) {
            if (createRestaurant(intval($admin_id), $owner, $email, $opening_hour, 
                                $location, $contact, $img["name"], $desc)) 
            {
                addRestaurantImgToFolder($img);
                header("Location: /admin/manage_restaurant");
            }
        }
    }
}
