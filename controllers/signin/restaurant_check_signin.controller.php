<?php
require "./database/database.php";
require "./models/restaurant.model.php";
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);

        $restaurant = accountExist($email);
        
        if (count($restaurant) > 0) {
            if (password_verify($password, $restaurant['password'])) {
                echo 'successfully logged in';
                $_SESSION['restaurant'] = "signin";
                header("Location: /restaurant");
            }else {
                header("Location: /restaurant/signin");
                echo 'wrong password';
            }
        }
    }
}