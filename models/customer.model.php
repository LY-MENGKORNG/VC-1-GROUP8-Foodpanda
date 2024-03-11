<?php

// Get all data of all customer accounts
function getAllCustomer(): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM users WHERE role_id = :role_id");
    $stmt->execute([":role_id" => 4]);
    return $stmt->fetchAll();
}

// Check if the customer's image profile is available in the database or in the directory
function checkCustomerImage($image): bool
{
    $target_dir = "assets/images/uploads/customer_profile/";
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;
    $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
    $file_allow_type = array("jpg", "png", "jpeg");
    $file_size = $image['size'];

    return (
        $file_size < 5000000 &&
        !file_exists($target_file_path) &&
        in_array($file_type, $file_allow_type)
    );
}

// customer's image profile to folder
function addImageToFolder($image)
{
    // File upload directory
    $target_dir = "assets/images/uploads/customer_profile/";
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;

    move_uploaded_file($image['tmp_name'], $target_file_path);
}


// customer edit profile
function customerEditProfile(string $first_name, string $last_name, string $email, string $phone, string $user_id) {
    global $connection;
    $stmt = $connection->prepare("UPDATE users SET 
                    first_name = :first_name, last_name = :last_name, email = :email, phone = :phone 
                    WHERE user_id = :user_id");

    $stmt->execute([
        ":first_name" => $first_name,
        ":last_name" => $last_name,
        ":email" => $email,
        ":phone" => $phone,
        ":user_id" => $user_id
    ]);
    return $stmt->rowCount() > 0;
}


// get all categories
function getCategories() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM categories");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getFoodsInfo() : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM foods_info");
    $stmt->execute();
    return $stmt->fetchAll();
}
function getFoodInfoById($food_id) : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM foods_info WHERE food_id = :food_id");
    $stmt->execute([":food_id" => $food_id]);
    return $stmt->fetch();
}

function getFoodsById($cate_id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM foods WHERE cate_id = :cate_id");
    $stmt->execute([":cate_id" => $cate_id]);
    return $stmt->fetchAll();
}