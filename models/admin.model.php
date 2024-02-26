<?php

function createAdmin($first_name, $last_name, $email, $password, $phone, $profile): bool
{
    if (count(getAdmin()) == 1) {
        return false;
    }
    date_default_timezone_get();
    $registration_date = date("Y-m-d H:i:s");

    global $connection;
    $role_id = 1;
    $stmt = $connection->prepare("INSERT INTO Users (first_name, last_name, email, password, phone, profile, registration_date, role_id) VALUES 
                                (:first_name, :last_name, :email, :password, :phone, :profile, :registration_date, :role_id);");
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
    return $stmt->rowCount() > 0;
}

function getAdmin(): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Users WHERE role_id = 1");
    $stmt->execute();
    return $stmt->fetchAll();
}

function adminExist(string $email) : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    
    return $stmt->rowCount() > 0 ? $stmt->fetch() : [];
}

function adminSignout(string $email) : bool {
    global $connection;
    $stmt = $connection->prepare("DELETE FROM Admin WHERE email = :email");
    $stmt->execute([':email' => $email]);
    return $stmt->rowCount() > 0;
}

function checkAdminImage($image): bool
{
    // File upload directory
    $target_dir = "assets/images/uploads/admin_profile/";
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;
    $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
    $file_allow_type = array("jpg", "png", "jpeg");
    $file_size = $image['size'];

    return 
    (
        $file_size < 500000 && 
        !file_exists($target_file_path) && 
        in_array($file_type, $file_allow_type)
    );
}

function addAdminImageToFolder($image)
{
    // File upload directory
    $target_dir = "assets/images/uploads/admin_profile/";
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;
    $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);

    // Allow certain file formats
    $allowTypes = array('jpg', 'jpeg', 'png');
    if (in_array($file_type, $allowTypes) && $image["size"] < 5000000) {
        if (!file_exists($target_file_path)) {
            move_uploaded_file($image['tmp_name'], $target_file_path);
        }
    }
}

function deleteAdminImage(string $image) {
    $target_file_path = "assets/images/uploads/admin_profile/".$image;

    if (file_exists($target_file_path)) {
        unlink($target_file_path);
    }
}

function createRestaurant(int $id, string $name, string $email, string $opening_hours, 
                        string $location, string $contact, string $img, string $desc)  
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO restaurants 
    (admin_id, restaurant_name, email, opening_hours, location, contact_info, restaurant_img, description)
    VALUES (:id, :name, :email, :opening_hours, :location, :contact, :img, :desc)");

    $stmt->execute([
        ":id" => $id,
        ":name" => $name,
        ":email" => $email,
        ":opening_hours" => $opening_hours,
        ":location" => $location,
        ":contact" => $contact,
        ":img" => $img,
        ":desc" => $desc
    ]);
    return $stmt->rowCount() > 0;
}

function checkRestaurantImage($image) {
        // File upload directory
        $target_dir = "assets/images/uploads/restaurants/";
        $file_name = basename($image["name"]);
        $target_file_path = $target_dir . $file_name;
        $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
        $file_allow_type = array("jpg", "png", "jpeg");
        $file_size = $image['size'];
    
        return 
        (
            $file_size < 500000 && 
            !file_exists($target_file_path) && 
            in_array($file_type, $file_allow_type)
        );
}

function addRestaurantImgToFolder($image) {
        // File upload directory
        $target_dir = "assets/images/uploads/restaurants/";
        $file_name = basename($image["name"]);
        $target_file_path = $target_dir . $file_name;
        $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
    
        // Allow certain file formats
        $allowTypes = array('jpg', 'jpeg', 'png');
        
        if (in_array($file_type, $allowTypes) && $image["size"] < 5000000) {
            if (!file_exists($target_file_path)) {
                move_uploaded_file($image['tmp_name'], $target_file_path);
            }
        }
}