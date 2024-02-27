<?php
if (isset($_SERVER["REQUEST_METHOD"]) == "POST") {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = htmlspecialchars(trim($_POST["email"]));
        $password = htmlspecialchars($_POST["password"]);
        
        
    }
}