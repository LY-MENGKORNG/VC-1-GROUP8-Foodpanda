<?php 
require "database/database.php"; 

function createAdmin(string $admin_name, string $email, string $password, string $phone, string $image = "") : bool {
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

?>