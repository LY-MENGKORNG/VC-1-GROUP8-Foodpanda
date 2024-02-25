<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['f-name']) && !empty($_POST['l-name']) && 
        !empty($_POST['email']) && !empty($_POST['password']) && !empty($_FILES['image'])){
            
            $first_name = htmlspecialchars($_POST['f-name']);
            $last_name = htmlspecialchars($_POST['l-name']);
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            $image = $_FILES['image'];

            $pass_encrypt = password_hash($password, PASSWORD_BCRYPT);

        if (checkCustomerImage($image)) {
            if(createCustomer($first_name, $last_name, $email, $pass_encrypt, $image['name'])) {
                addImageToFolder($image);
                header("Location: /customer/signin");
            }
        }
        else {
            header("Location: /foodpanda");
        }
    }
}