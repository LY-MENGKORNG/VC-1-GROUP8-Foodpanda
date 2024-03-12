<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $admin = $_SESSION["admin"];
        $password_confirm = password_verify($password, $admin["password"]);
        if (count($admin) == 0 && !$password_confirm) {

            $_SESSION['is_admin_password'] = "Password is incorrect";
            $_SESSION['is_admin_email'] = "email is incorrect";
            header("Location: /admin/signout");

        } else if (!$password_confirm && count($admin) > 0) {
            unset($_SESSION['is_admin_email']);

            $_SESSION['is_admin_password'] = "Password is incorrect";
            header("Location: /admin/signout");
            
        }else if (count($admin) == 0) {
            unset($_SESSION['is_admin_password']);

            $_SESSION['is_admin_email'] = "Email is incorrect";
            header("Location: /admin/signout");

        }else {
            unset($_SESSION["is_admin_password"]);
            unset($_SESSION['is_admin_email']);
            unset($_SESSION["admin"]);
            header("Location: /foodpanda");
        }
    }
}