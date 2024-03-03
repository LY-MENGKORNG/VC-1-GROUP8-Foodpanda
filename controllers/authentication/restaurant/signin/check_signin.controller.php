<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $restaurant_owner = accountExist($email, 2);

        if (count($restaurant_owner) > 0) {
            if (password_verify($password, $restaurant_owner['password'])) {
                unset($_SESSION["is_owner_email"]);
                unset($_SESSION["is_owner_password"]);
                
                $_SESSION['restaurant_owner'] = $restaurant_owner;
                header("Location: /restaurant");
            }else {
                unset($_SESSION['is_owner_email']);
                $_SESSION["is_owner_password"] = "Invalid password";
                header("Location: /restaurant/signin");
            }
        }else {
            unset($_SESSION["is_owner_password"]);
            $_SESSION["is_owner_email"] = "Invalid email address";
            header("Location: /restaurant/signin");
        }
    }
}
