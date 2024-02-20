<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['f-name']) && !empty($_POST['l-name']) && 
        !empty($_POST['email']) && !empty($_POST['password'])){
            
            $first_name = htmlspecialchars($_POST['f-name']);
            $last_name = htmlspecialchars($_POST['l-name']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            
            $pass_encrypt = password_hash($password, PASSWORD_BCRYPT);

        if(createCustomer($first_name, $last_name, $email, $pass_encrypt)) {
            header("Location: /customer/signin");
        }
        else {
            header("Location: /foodpanda");
        }
    }
}