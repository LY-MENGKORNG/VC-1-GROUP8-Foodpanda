<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $admin = adminExist($email);
        $admin_confirm = password_verify($password, $admin['password']);
        
        if (count($admin) > 0) {
            if ($admin_confirm) {
                $_SESSION['admin'] = $admin;
                header("Location: /admin");
            }else {
                // header("Location: /admin/signin");
            }
        }
    }
}