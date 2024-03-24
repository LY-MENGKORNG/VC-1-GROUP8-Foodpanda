<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    var_dump($_POST);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['passwordConfirm']);
    $verify_code = $_POST['verify_codes'];
    $email = $_POST['email'];
    $verify_user = check_verify_code($verify_code);

    if ($verify_code == $verify_user['verify_codes']) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $reset_password = reset_password($email, $hashed_password);
        $verify_code = "NULL";
        update_reset_token($email, $verify_code);
        header("Location: /customer/signin");
    }else{
        echo "verify code is expired";
    }
}
