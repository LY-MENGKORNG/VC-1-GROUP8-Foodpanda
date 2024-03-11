<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $delivery = accountExist($email, 3);

        if (count($delivery) > 0) {
            if (password_verify($password, $delivery['password'])) {
                unset($_SESSION["is_delivery_email"]);
                unset($_SESSION["is_delivery_password"]);
                
                $_SESSION['delivery'] = $delivery;
                header("Location: /delivery");
            }else {
                unset($_SESSION['is_delivery_email']);
                $_SESSION["is_delivery_password"] = "Invalid password";
                header("Location: /delivery/signin");
            }
        }else {
            unset($_SESSION["is_delivery_password"]);
            $_SESSION["is_delivery_email"] = "Invalid email address";
            header("Location: /delivery/signin");
        }
    }
}
