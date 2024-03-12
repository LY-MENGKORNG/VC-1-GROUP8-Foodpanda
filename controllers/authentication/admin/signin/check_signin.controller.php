<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $admin = accountExist($email, 1);

        if (count($admin) > 0) {
            if (password_verify($password, $admin['password'])) {
                $_SESSION['admin'] = $admin;
                header("Location: /admin");
            } else {
                unset($_SESSION['is_admin_email']);
                $_SESSION["is_admin_password"] = "Invalid password!";
                header("Location: /admin/signin");
            }
        }
        else if (!count($admin) > 0) {
            unset($_SESSION['is_admin_password']);
            $_SESSION["is_admin_email"] = "Invalid email!";
            header("Location: /admin/signin");
        }
        else if(!password_verify($password, $admin['password']) && !count($admin) > 0) {
            unset($_SESSION['is_admin_email']);
            $_SESSION["is_admin_password"] = "Invalid password!";
            header("Location: /admin/signin");
        }
    }
}
