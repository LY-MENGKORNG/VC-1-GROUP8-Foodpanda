<?php

function createAdmin($admin_name, $email, $password, $phone,): bool
{
    if (count(getAdmin()) == 1) {
        return false;
    }
    global $connection;

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
function accountExist(string $email) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Admin WHERE email = :email");
    $stmt->execute([':email' => $email]);
    
    return $stmt->rowCount() > 0 ? $stmt->fetch() : [];
}


function adminSignout($email) : bool {
    global $connection;
    $stmt = $connection->prepare("DELETE FROM Admin WHERE email = :email");
    $stmt->execute([':email' => $email]);
    return $stmt->rowCount() > 0;
}

// Retrieve order status from the database
function getStatus($restaurant_name, $owner_name,$opening_hour ){
    global $connection;
    $stmt = $connection->prepare("SELECT FROM Restaurants WHERE restaurant_name = :restaurant_name, owner_name= : onwner_name, opening_hour = :opening_hour");
    $stmt -> execute ([
        ':restaurant_name' => $restaurant_name,
        ':owner_name' => $owner_name,
        ':opening_hour' => $opening_hour
    ]);
    return $stmt->rowCount() > 0;
}