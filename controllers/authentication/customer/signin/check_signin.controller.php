<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $customer = accountExist($email, 4);
        
        if (count($customer) > 0) {
            if (password_verify($password, $customer['password'])) {
                $_SESSION['customer'] = $customer;
                header("Location: /customer");
            }else {
                unset($_SESSION["is_customer_email"]);
                $_SESSION['is_customer_password'] = "Invalid password";
                header("Location: /customer/signin");
            }
        }else {
            unset($_SESSION["is_customer_password"]);
            $_SESSION['is_customer_email'] = "Invalid email";
            header("Location: /customer/signin");
        }
    }
}