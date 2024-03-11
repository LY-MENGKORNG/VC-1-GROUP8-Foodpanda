<?php
session_start();    
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $delivery = $_SESSION["delivery"];
        $password_confirm = password_verify($password, $delivery["password"]);
        if (count($delivery) == 0 && !$password_confirm) {

            $_SESSION['is_delivery_password'] = "Password is incorrect";
            $_SESSION['is_delivery_email'] = "email is incorrect";
            header("Location: /delivery/signout");
        } else if (!$password_confirm && count($delivery) > 0) {
            unset($_SESSION['is_delivery_email']);

            $_SESSION['is_delivery_password'] = "Password is incorrect";
            header("Location: /delivery/signout");
        } else if (count($delivery) == 0 && $password_confirm) {
            unset($_SESSION['is_delivery_password']);

            $_SESSION['is_delivery_email'] = "Email is incorrect";
            header("Location: /delivery/signout");
        } else {

            unset($_SESSION["is_delivery_password"]);
            unset($_SESSION['is_delivery_email']);
            unset($_SESSION['delivery']);
            header("Location: /foodpanda");
        }
    }
}
