<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $admin = accountExist($email, 1);
        if (count($admin) > 0) {
            if (password_verify($password, $admin['password'])) {
                session_start();
                $_SESSION['admin'] = $admin;
                header("Location: /admin");
            } else {
                header("Location: /admin/signin");
            }
        }
    }
}
