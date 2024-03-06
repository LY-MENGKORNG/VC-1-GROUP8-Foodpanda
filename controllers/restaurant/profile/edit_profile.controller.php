<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST["user_id"]) && !empty($_POST["first_name"]) &&
        !empty($_POST["last_name"]) && !empty($_POST["phone"]) &&
        !empty($_POST["email"])
    ) {

        $user_id = $_POST["user_id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $profile = !empty($_FILES["profile"]) ? $_FILES["profile"] : $restaurant_owner["profile"];
        $tartget_dir = "./assets/images/uploads/owner_profile/";

        if (!is_array($profile) && $profile == NULL) {
            if (editProfile($first_name, $last_name, $email, $phone, $profile, $user_id, 2)) {
                $_SESSION["restaurant_owner"] = accountExist($email, 2);
                $restaurant_owner = $_SESSION["restaurant_owner"];
            }
            header("Location: /restaurant/profile");

        } else if (checkImage($profile, $tartget_dir)) {
            changeImage($tartget_dir, $profile, $restaurant_owner["profile"]);
            if (editProfile($first_name, $last_name, $email, $phone, $profile["name"], $user_id, 2)) {
                $_SESSION["restaurant_owner"] = accountExist($email, 2);
                $restaurant_owner = $_SESSION["restaurant_owner"];
            }
            header("Location: /restaurant/profile");
        }
    }
}
