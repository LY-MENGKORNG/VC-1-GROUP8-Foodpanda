<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && 
        !empty($_POST["email"]) && !empty($_POST["phone"]) && 
        !empty($_POST["user_id"]) && !empty($_POST["profile_img"])) 
    {    
        $first_name = htmlspecialchars($_POST["first_name"]);
        $last_name = htmlspecialchars($_POST["last_name"]);
        $email = htmlspecialchars(trim($_POST["email"]));
        $phone = htmlspecialchars($_POST["phone"]);
        $user_id = htmlspecialchars($_POST["user_id"]);
        $profile = htmlspecialchars($_POST["profile_img"]);
        $target_dir = "/assets/images/uploads/owner_prfile/";

        if (checkImage($profile, $target_dir)) {
            // deleteImage(accountExist($_SESSION["admin"]))
            if (editUser($first_name, $last_name, $email, $phone, $profile["name"], $user_id)) {
                $_SESSION["admin"] = accountExist($email, 1);
                $admin = $_SESSION["admin"];
            }
        }
        header("Location: /customer/profile");
    }
}