<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(($_POST["first_name"])) && !empty($_POST["last_name"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["user_id"])){
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $user_id = $_POST["user_id"];
        
        editDelivery(intval($user_id), $first_name, $last_name, $email, $phone);
        header("Location: /restaurant/delivery");
    }
}