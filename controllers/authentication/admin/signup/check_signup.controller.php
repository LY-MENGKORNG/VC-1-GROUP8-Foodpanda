<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && 
        !empty($_POST['password']) && !empty($_POST['phone']) && !empty($_FILES["profile"])){
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $phone = htmlspecialchars($_POST['phone']);
        $image = $_FILES["profile"];

        $pass_encrypt = password_hash($password, PASSWORD_BCRYPT);
        
        if (checkAdminImage($image)) {
            if(createAdmin($first_name, $last_name, $email, $pass_encrypt, $phone, $image["name"])) {
                addAdminImageToFolder($image);
                header("Location: /admin/signin");
            }else {
                header("Location: /admin/signup");
            }
        }else {
            header("Location: /admin/signup");
        }
    }
}