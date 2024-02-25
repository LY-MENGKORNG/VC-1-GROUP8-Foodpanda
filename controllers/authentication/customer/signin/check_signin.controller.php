<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $customer = customerExist($email);
        
        if (count($customer) > 0) {
            if (password_verify($password, $customer['password'])) {
                $_SESSION['customer'] = $customer;
                header("Location: /customer");
            }else {
                $_SESSION['is_customer_password'] = "Invalid password";
            }
        }else {
            $_SESSION['is_customer_email'] = "Invalid email";
            header("Location: /customer/signin");
        }
    }
}