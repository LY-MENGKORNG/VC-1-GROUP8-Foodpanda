<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $admin = accountExist($email);
        
        if (count($admin) > 0) {
            if (password_verify($password, $admin['password'])) {
                echo 'successfully logged in';
                $_SESSION['admin'] = $admin;
                header("Location: /admin");
            }else {
                header("Location: /admin/signin");
                echo 'wrong password';
            }
        }
    }
}