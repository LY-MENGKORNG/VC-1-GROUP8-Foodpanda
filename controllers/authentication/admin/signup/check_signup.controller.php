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
        $target_dir = "/assets/images/uploads/admin_profile/";
        $target_dir2 = "/assets/images/uploads/admin_profile/restaurant_owner/";

        
        if (checkImage($image, $target_dir) && checkImage($image, $target_dir2)) {
            if(createUser(1, $first_name, $last_name, $email, $pass_encrypt, $phone, $image["name"])) {
                addImageFolder($image, $target_dir);
                addImageFolder($image, $target_dir2);
                header("Location: /admin/signin");
            }else {
                header("Location: /admin/signup");
            }
        }else {
            header("Location: /admin/signin");
        }
    }
}