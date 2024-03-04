<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(!empty($_POST["user_id"]) && !empty($_POST["first_name"]) && 
        !empty($_POST["last_name"]) && !empty($_POST["phone"]) && !empty($_POST["email"])) {
    }
    $user_id = $_POST["user_id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    if (ownerEditProfile($first_name, $last_name, $email, $phone, $user_id)) {
        $_SESSION["restaurant_owner"] = accountExist($email, 2);
        $restaurant_owner = $_SESSION["restaurant_owner"];
    }
    header("Location: /restaurant/profile");
}