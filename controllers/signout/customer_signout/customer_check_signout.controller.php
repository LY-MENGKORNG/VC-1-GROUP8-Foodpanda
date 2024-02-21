<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        
        echo $_POST['email'], $_POST['password'];   
        if(customerSignout($email)) {
            // deleteImagefile($email);

            session_destroy();
            header('Location: /foodpanda');
        }else {
            header("Location: /customer/signout");
        }
    }
}