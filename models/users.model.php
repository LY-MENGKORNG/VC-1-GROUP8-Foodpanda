<?php
function createUser($role_id, $first_name, $last_name, $email, $password, $phone, $profile = NULL): bool
{
    date_default_timezone_get();
    $registration_date = date("Y-m-d H:i:s");

    global $connection;
    $stmt = $connection->prepare("INSERT INTO Users (first_name, last_name, email, password, phone, profile, registration_date, role_id) VALUES 
                                (:first_name, :last_name, :email, :password, :phone, :profile, :registration_date, :role_id);");
    try {
        $stmt->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':email' => $email,
            ':password' => $password,
            ':phone' => $phone,
            ':profile' => $profile,
            ':registration_date' => $registration_date,
            ':role_id' => $role_id
        ]);
        return true;
    } catch (\Throwable $th) {
        return false;   
    }
}

function accountExist(string $email, int $role_id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Users WHERE email = :email");
    $stmt->execute([':email' => $email]);

    return $stmt->rowCount() > 0 ? $stmt->fetch() : [];
}

// Get all data of all customer accounts
function getAllUsers($role_id): array
{
    global $connection; 
    $stmt = $connection->prepare("SELECT * FROM users WHERE role_id = :role_id");
    $stmt->execute([":role_id" => $role_id]);
    return $stmt->fetchAll();
}

// Get all owners
function getOwner() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM users WHERE role_id = 1 OR role_id = 2");
    $stmt->execute();
    return $stmt->fetchAll();
}

function editUser() {
    
}

function checkImage($image, $target_dir): bool
{
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;
    $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
    $file_allow_type = array("jpg", "png", "jpeg");
    $file_size = $image['size'];

    return 
    (
        $file_size < 10000000 && 
        !file_exists($target_file_path) && 
        in_array($file_type, $file_allow_type)
    );
}

function addImageFolder($image, $target_dir)
{
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;
    move_uploaded_file($image['tmp_name'], $target_file_path);
}