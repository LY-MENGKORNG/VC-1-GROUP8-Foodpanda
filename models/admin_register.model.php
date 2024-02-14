<?php
require_once "../database/database.php";
// -------------------
function adminRegister(string $name, string $email, string $password, string $phone, string $image = "" )  {
    global $connection;
    $stmt = $connection->prepare("INSERT INTO Admin (admin_name, email, password, phone, image) 
    VALUES (:name, :email, :password, :phone, :image)");
    $stmt->execute([
        ":name" => $name,
        ":email" => $email,
        ":password" => $password,
        ":phone" => $phone,
        ":image" => $image
    ]);
    return $stmt->rowCount() > 0;
}