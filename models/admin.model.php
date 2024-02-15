<?php 
require "database/database.php"; 

function toString(...$variable) {
    return htmlspecialchars($variable);
}

function createAdmin($admin_name, $email, $password, $phone, $image = "") : bool {
    toString($admin_name, $email, $password, $phone, $image);
    
    global $connection;
    $stmt = $connection->prepare("INSERT INTO Admin (admin_name, email, password, phone, image) VALUES 
                                    (:admin_name, :email, :password, :phone, :image);");
    $stmt->execute([
        'admin_name' => $admin_name,
        'email' => $email,
        'password' => $password,
        'phone' => $phone,
        'image' => $image
    ]);
    return $stmt->rowCount() > 0;
}

function getAdmin() : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Admin");
    $stmt->execute();
    return $stmt->fetchAll();
}

?>