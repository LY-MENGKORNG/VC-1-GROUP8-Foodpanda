<?php
require_once "../database/database.php";
function verify_email(string $name, string $email, string $verify_token_email){

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $verify_token_email = password_hash($password, PASSWORD_BCRYPT);
    
        $verify_result = verify_email($name, $email, $verify_token_email);
        echo $verify_result;
    }
    if ($verify_result){
        header('Location: /admin');
    }else {
        echo 'Incorrect success';
    }
}
