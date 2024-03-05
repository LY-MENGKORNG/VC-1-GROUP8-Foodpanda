<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (
        !empty($_POST['first_name']) && !empty($_POST["email"]) && 
        !empty($_POST["password"]) && !empty($_POST["last_name"]) &&
        !empty($_POST["contact_info"])
    ){
        $first_name = htmlspecialchars($_POST["first_name"]);
        $last_name = htmlspecialchars($_POST["last_name"]);
        $email = htmlspecialchars(trim($_POST["email"]));
        $contact_info = htmlspecialchars($_POST["contact_info"]);
        $password = htmlspecialchars($_POST["password"]);
        $password_encrypt = password_hash($password, PASSWORD_BCRYPT);

        if (createUser(2, $first_name, $last_name, $email, $password_encrypt, $contact_info)) {
            unset($_SESSION["is_owner"]);
            header("Location: /admin/restaurant_owner");
        }else {
            $_SESSION["is_owner"] = "<script>alert('Your Email is already Exists')</script>";
            header("Location: /admin/restaurant_owner");
        }
    }
}
