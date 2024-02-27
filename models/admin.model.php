<?php

function createAdmin($first_name, $last_name, $email, $password, $phone, $profile): bool
{
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
function accountExist(string $email) {
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
        $file_size < 5000000 && 
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

    move_uploaded_file($image['tmp_name'], $target_file_path);
}


function rejectEmail($email, $password): bool {
    getAdmin();

    $emailPattern = ' /^\w+(\.\w+)*@[\w-]+(\.[\w-]+)+$/ ';
    $passwordPattern = 8;

    $emailValid = preg_match($emailPattern, $email);
    $passwordValid = preg_match($passwordPattern, $password);

    if (!$emailValid || !$passwordValid) {
        if (rejectEmail($email,$password)){
            echo "You got wrong";
        }
        return false;

    } else {
        echo "You got right";
    }

    return true;
}

function createRestaurant(string $restaurant_name, string $location, string $email, string $password,
                        string $contact_info, string $restaurant_img, string $description)  
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO restaurants 
    (restaurant_name, location, email, password, contact_info, restaurant_img, description) VALUES 
    (:restaurant_name, :location, :email, :password, :contact_info, :restaurant_img, :description)");

    $stmt->execute([
        ":restaurant_name" => $restaurant_name,
        ":location" => $location,
        ":email" => $email,
        ":password" => $password,
        ":contact_info" => $contact_info,
        ":restaurant_img" => $restaurant_img,
        ":description" => $description
    ]);
    return $stmt->rowCount() > 0;
}

function getAllRestaurants() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM restaurants");
    $stmt->execute();
    return $stmt->fetchAll();
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
            $file_size < 5000000 && 
            !file_exists($target_file_path) && 
            in_array($file_type, $file_allow_type)
        );
}

function addRestaurantImgToFolder($image) {
        // File upload directory
        $target_dir = "assets/images/uploads/restaurants/";
        $file_name = basename($image["name"]);
        $target_file_path = $target_dir . $file_name;
        move_uploaded_file($image['tmp_name'], $target_file_path);
}
