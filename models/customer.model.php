<?php

function createCustomer(string $first_name, string $last_name, string $email, string $password, string $image)
{
    date_default_timezone_get();
    $registration_date = date("Y-m-d H:i:s");

    global $connection;
    $stmt = $connection->prepare("INSERT INTO customers (first_name, last_name, email, password, registration_date, image) 
                                VALUES (:first_name, :last_name, :email, :password, :registration_date, :image);");
    $stmt->execute([
        ":first_name" => $first_name,
        ":last_name" => $last_name,
        ":email" => $email,
        ":password" => $password,
        ":registration_date" => $registration_date,
        ":image" => $image
    ]);
    return $stmt->rowCount() > 0;
}

function getAllCustomer(): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM customers");
    $stmt->execute();
    return $stmt->fetchAll();
}

function checkCustomerImage($image): bool
{
    // File upload directory
    $target_dir = "assets/uploads/customer_profile/";
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

function addImageToFolder($image)
{
    // File upload directory
    $target_dir = "assets/uploads/customer_profile/";
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

function customerExist(string $email): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM customers WHERE email = :email");
    $stmt->execute([':email' => $email]);

    return $stmt->rowCount() > 0 ? $stmt->fetch() : [];
}

function customerSginout($email) {
    global $connection;
    $stmt = $connection->prepare("DELETE FROM customer WHERE email = :email");
    $stmt->execute([':email' => $email]);
    return $stmt->rowCount() > 0;
}

// sava data that updated to database (PD8-69 > PD8-100)
function customerSava($email) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM customer WHERE email = :email");
    $stmt->execute([':email' => $email]);
    return $stmt->rowCount() > 0;
}
