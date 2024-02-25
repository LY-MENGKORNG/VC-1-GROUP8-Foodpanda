<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['f-name']) && !empty($_POST['l-name']) && !empty($_POST['email']) && 
        !empty($_POST['password']) && !empty($_POST['phone']) && !empty($_FILES["image"])){
        $name = htmlspecialchars($_POST['f-name']." ". $_POST['l-name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $phone = htmlspecialchars($_POST['phone']);
        $image = $_FILES["image"];

        $pass_encrypt = password_hash($password, PASSWORD_BCRYPT);
        
        if (checkAdminImage($image)) {
            if(createAdmin($name, $email, $pass_encrypt, $phone, $image["name"])) {
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