<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $admin = adminExist($email);
        
        if (count($admin) > 0) {
            if (password_verify($password, $admin['password'])) {
                $_SESSION['admin'] = $admin;
                header("Location: /admin");
            }else {
                header("Location: /admin/signin");
            }
        }
    }
}