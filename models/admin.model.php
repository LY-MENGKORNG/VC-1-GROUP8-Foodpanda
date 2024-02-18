<?php 
require "database/database.php"; 

function toString($variable) {
    return htmlspecialchars($variable, ENT_QUOTES);
}

function createAdmin($admin_name, $email, $password, $phone,) : bool {
    global $connection;

    $admin_name = toString($admin_name);
    $email = toString($email);
    $password = toString($password);
    $phone = toString($phone);

    $password = password_hash($password, PASSWORD_BCRYPT);
    
    $stmt = $connection->prepare("INSERT INTO Admin (admin_name, email, password, phone) VALUES 
                                    (:admin_name, :email, :password, :phone);");
    $stmt->execute([
        'admin_name' => $admin_name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone
    ]);
    return $stmt->rowCount() > 0;
}

function getAdmin() : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Admin");
    $stmt->execute();
    return $stmt->fetchAll();
}

function verify_email( string $email, string $password ){
    $admin = getAdmin();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $verify_token_email = password_hash($password, PASSWORD_BCRYPT);
    
        $verify_result = verify_email( $email, $verify_token_email);
        echo $verify_result;
    }
    if ($verify_result){
        header('Location: /admin');
    }else {
        echo 'Incorrect success';
    }
}


