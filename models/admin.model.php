<?php 
require "database/database.php"; 

function toString($param) {
    return htmlspecialchars($param, ENT_QUOTES);
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

