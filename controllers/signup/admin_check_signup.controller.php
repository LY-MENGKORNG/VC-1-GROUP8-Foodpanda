<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['f-name']) && !empty($_POST['l-name']) && !empty($_POST['email']) && 
        !empty($_POST['password']) && !empty($_POST['phone'])){
        $name = htmlspecialchars($_POST['f-name']." ". $_POST['l-name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $phone = htmlspecialchars($_POST['phone']);

        $pass_encrypt = password_hash($password, PASSWORD_DEFAULT);

        if(createAdmin($name, $email, $pass_encrypt, $phone)) {
            header("Location: /admin/signin");
        }else {
            header("Location: /admin/signup");
        }
    }
}