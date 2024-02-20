<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $customer = customerExist($email);
        
        if (count($customer) > 0) {
            if (password_verify($password, $customer['password'])) {
                $_SESSION['customer'] = $email;
                header("Location: /customer");
            }else {
                header("Location: /customer/signin");
            }
        }
    }
}