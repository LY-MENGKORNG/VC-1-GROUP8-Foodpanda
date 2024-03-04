<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["first_name"]) && !empty($_POST["last_name"]) && 
        !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["user_id"])) 
    {    
        $first_name = htmlspecialchars($_POST["first_name"]);
        $last_name = htmlspecialchars($_POST["last_name"]);
        $email = htmlspecialchars(trim($_POST["email"]));
        $phone = htmlspecialchars($_POST["phone"]);
        $user_id = htmlspecialchars($_POST["user_id"]);

        if (customerEditProfile($first_name, $last_name, $email, $phone, $user_id)) {
            $_SESSION["customer"] = accountExist($email, 4);
        }
        header("Location: /customer/profile");
    }
}