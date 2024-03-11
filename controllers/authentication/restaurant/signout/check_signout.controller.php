<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $restaurant_owner = $_SESSION["restaurant_owner"];
        $password_confirm = password_verify($password, $restaurant_owner["password"]);
        if (count($restaurant_owner) == 0 && !$password_confirm) {

            $_SESSION['is_owner_password'] = "Password is incorrect";
            $_SESSION['is_owner_email'] = "email is incorrect";
            header("Location: /restaurant/signout");
        } else if (!$password_confirm && count($restaurant_owner) > 0) {
            unset($_SESSION['is_owner_email']);

            $_SESSION['is_owner_password'] = "Password is incorrect";
            header("Location: /restaurant/signout");
        } else if (count($restaurant_owner) == 0 && $password_confirm) {
            unset($_SESSION['is_owner_password']);

            $_SESSION['is_owner_email'] = "Email is incorrect";
            header("Location: /restaurant/signout");
        } else {

            unset($_SESSION["is_owner_password"]);
            unset($_SESSION['is_owner_email']);
            unset($_SESSION['restaurant_owner']);
            header("Location: /foodpanda");
        }
    }
}
