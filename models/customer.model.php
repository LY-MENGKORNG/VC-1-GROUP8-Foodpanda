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
    $target_dir = "assets/images/uploads/customer_profile/";
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;
    $file_type = pathinfo($target_file_path, PATHINFO_EXTENSION);
    $file_allow_type = array("jpg", "png", "jpeg");
    $file_size = $image['size'];

    return (
            $file_size < 500000 &&
            !file_exists($target_file_path) &&
            in_array($file_type, $file_allow_type)
        );
}

function addImageToFolder($image)
{
    // File upload directory
    $target_dir = "assets/images/uploads/customer_profile/";
    $file_name = basename($image["name"]);
    $target_file_path = $target_dir . $file_name;

    move_uploaded_file($image['tmp_name'], $target_file_path);
}

function customerExist(string $email): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM customers WHERE email = :email");
    $stmt->execute([':email' => $email]);

    return $stmt->rowCount() > 0 ? $stmt->fetch() : [];
}

function customerSignout(string $email): bool
{
    global $connection;
    $stmt = $connection->prepare("DELETE FROM customers WHERE email = :email");
    $stmt->execute([':email' => $email]);
    return $stmt->rowCount() > 0;
}

function changePassword(string $email, string $oldPassword, string $newPassword)
{
    global $connection;
    $oldPasswordHash = hash('sha256', $oldPassword);

    // Check if the old password matches the stored password for the given email
    $stmt = $connection->prepare("SELECT * FROM customers WHERE email = :email AND password = :password");
    $stmt->execute([':email' => $email, ':password' => $oldPasswordHash]);

    if ($stmt->rowCount() > 0) {
        // Old password is correct, update the password
        $newPasswordHash = hash('sha256', $newPassword);
        $updateStmt = $connection->prepare("UPDATE customers SET password = :newPassword WHERE email = :email");
        $updateStmt->execute([':newPassword' => $newPasswordHash, ':email' => $email]);

        if ($updateStmt->rowCount() > 0) {
            return true; // Password changed successfully
        } else {
            return false; // Error updating password
        }
    } else {
        return false; // Incorrect old password
    }
}

$email = "user@example.com";
$oldPassword = "oldPassword123";
$newPassword = "newPassword456";

if (changePassword($email, $oldPassword, $newPassword)) {
    echo "Password changed successfully.";
} else {
    echo "Failed to change password. Please check your old password.";
}

