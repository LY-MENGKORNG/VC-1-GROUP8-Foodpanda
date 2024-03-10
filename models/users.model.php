<?php
function createUser($role_id, $first_name, $last_name, $email, $password, $phone, $profile = NULL): bool
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO Users (first_name, last_name, email, password, phone, profile, role_id) VALUES 
                                (:first_name, :last_name, :email, :password, :phone, :profile, :role_id);");
    try {
        $stmt->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':email' => $email,
            ':password' => $password,
            ':phone' => $phone,
            ':profile' => $profile,
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

function editUser($first_name, $last_name, $email, $phone, $profile, $user_id, $role_id) {
    global $connection;
    $stmt = $connection->prepare(
        "UPDATE users SET first_name = :first_name, last_name = :last_name, 
        email = :email, phone = :phone, profile = :profile WHERE user_id = :user_id
        AND role_id = :role_id");
        
    $stmt->execute([
        ":first_name" => $first_name,
        ":last_name" => $last_name,
        ":email" => $email,
        ":phone" => $phone,
        ":profile" => $profile,
        ":user_id" => $user_id,
        ":role_id" => $role_id
    ]);
    return $stmt->rowCount() > 0;
}

function checkImage($image, $target_dir): bool
{
    if (!is_array($image)) return false; 
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


function deleteImage($target_file) {
    if (file_exists($target_file)) {
        unlink($target_file);
        return true;
    }
    return false;
}

function editProfile(string $first_name, string $last_name, string $email, string $phone, $profile, string $user_id, int $role_id) {
    global $connection;
    $stmt = $connection->prepare("UPDATE users SET 
            first_name = :first_name, last_name = :last_name, email = :email, phone = :phone, profile = :profile 
            WHERE user_id = :user_id AND role_id = :role_id");

    $stmt->execute([
        ":first_name" => $first_name,
        ":last_name" => $last_name,
        ":email" => $email,
        ":phone" => $phone,
        ":profile" => $profile,
        ":user_id" => $user_id,
        ":role_id" => $role_id
    ]);
    return $stmt->rowCount() > 0;
}

function changeImage(string $target_dir, array $image, $profile) {
    if ($profile) {
        unlink($target_dir.$profile);
    }
    addImageFolder($image, $target_dir);
}
