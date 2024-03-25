<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty($_POST["user_id"]) && !empty($_POST["first_name"]) &&
        !empty($_POST["last_name"]) && !empty($_POST["phone"]) &&
        !empty($_POST["email"])
    ) {
        $user_id = htmlspecialchars($_POST["user_id"]);
        $first_name = htmlspecialchars($_POST["first_name"]);
        $last_name = htmlspecialchars($_POST["last_name"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $email = htmlspecialchars($_POST["email"]);
        $profile = !empty($_FILES["profile"]["name"]) ? $_FILES["profile"] : $restaurant_owner["profile"];
        $target_dir = "./assets/images/uploads/owner_profile/";

        if (!is_array($profile) || $profile == NULL) {
            if (editProfile($first_name, $last_name, $email, $phone, $profile, $user_id, 2)) {
                $_SESSION["restaurant_owner"] = accountExist($email, 2);
                $restaurant_owner = $_SESSION["restaurant_owner"];
            }
        }
        else if (
            $profile["size"] < 5000000
            ) {
                changeImage($target_dir, $profile, $restaurant_owner["profile"]);
                if (editProfile($first_name, $last_name, $email, $phone, $profile["name"], $user_id, 2)) {
                    $_SESSION["restaurant_owner"] = accountExist($email, 2);
                    $restaurant_owner = $_SESSION["restaurant_owner"];
                }
            }
        header("Location: /restaurant/profile");
    }
}