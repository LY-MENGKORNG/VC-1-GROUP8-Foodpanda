<?php
if (isset($_SERVER["REQUEST_METHOD"]) == "POST") {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = htmlspecialchars(trim($_POST["email"]));
        $password = htmlspecialchars($_POST["password"]);
        
        $restaurant_owner = accountExist($email);

        if (count($restaurant_owner) > 0) {
            if (password_verify($password, $restaurant_owner['password'])) {
                $_SESSION['restaurant'] = $restaurant_owner;
                header("Location: /restaurant");
            }else {
                $_SESSION['is_restaurant_owner_password'] = "Invalid password";
                header("Location: /restaurant/signin");
                die();
            }
        }
        $_SESSION['is_restaurant_owner_email'] = "Invalid email";
        header("Location: /restaurant/signin");
    }
}