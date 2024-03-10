<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (
        !empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) &&
        !empty($_POST['password']) && !empty($_POST['phone'])
    ) {
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $phone = htmlspecialchars($_POST['phone']);

        $pass_encrypt = password_hash($password, PASSWORD_BCRYPT);

        if (createUser(1, $first_name, $last_name, $email, $pass_encrypt, $phone)) {
            header("Location: /admin/signin");
        } else {
            header("Location: /admin/signup");
        }

    }
}