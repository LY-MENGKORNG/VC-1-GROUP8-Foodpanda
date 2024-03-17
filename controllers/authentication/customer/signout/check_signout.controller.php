<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $customer = $_SESSION["customer"]; 
        $password_confirm = password_verify($password, $customer["password"]);
        if ($customer["email"] != $email && !$password_confirm) {

            $_SESSION['is_customer_password'] = "Password is incorrect";
            $_SESSION['is_customer_email'] = "email is incorrect";
            header("Location: /customer/signout");
        } else if (!$password_confirm && $customer["email"] == $email) {
            unset($_SESSION['is_customer_email']);

            $_SESSION['is_customer_password'] = "Password is incorrect";
            header("Location: /customer/signout");
        } else if ($customer["email"] != $email && $password_confirm) {
            unset($_SESSION['is_customer_password']);

            $_SESSION['is_customer_email'] = "Email is incorrect";
            header("Location: /customer/signout");
        } else {

            unset($_SESSION["is_customer_password"]);
            unset($_SESSION['is_customer_email']);
            unset($_SESSION['customer']);
            header("Location: /foodpanda");
        }
    }
}
