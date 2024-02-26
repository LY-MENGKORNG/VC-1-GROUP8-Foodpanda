<?php

function createAdmin($admin_name, $email, $password, $phone, $image): bool
{
    if (count(getAdmin()) == 1) {
        return false;
    }
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


function adminSignout(string $email) : bool {
    global $connection;
    $stmt = $connection->prepare("DELETE FROM Admin WHERE email = :email");
    $stmt->execute([':email' => $email]);
    return $stmt->rowCount() > 0;
}

// Retrieve order status from the database
function getOrderStatus($image, $food_name, $customer_name, $status, $date){
    global $connection;
    $stmt = $connection->prepare("SELECT f.image, f.food_name, c.first_name,p.status, o.order_date FROM Orders o
    INNER JOIN Customers c ON o.customer_id = c.customer_id, 
    LEFT JOIN Payments p ON o.order_id = p.order_id");
    $stmt -> execute ([
        ':image' => $image,
        ':food_name' => $food_name,
        ':first_name' => $customer_name,
        ':status' => $status,
        ':date' => $date
    ]);
    return $stmt->rowCount() > 0;
}

// Function to disable or delete fraudulent accounts
function disableFraudulentAccount(){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM customers WHERE registration_date < DATE_SUB(NOW(), INTERVAL 30 DAY)");
    if ($stmt-> rowCount() > 0) {
        while($row = $stmt->fetch(PDO:: FETCH_ASSOC)) {
            // For demonstration purposes, let's assume we're deleting the fraudulent account
            $customerId = $row["customer_id"];
            $sql = "DELETE FROM customers WHERE customer_id=$customerId";
            if ($connection->query($sql) === TRUE) {
                echo "Fraudulent account with ID $customerId has been deleted successfully.<br>";
            } else {
                echo "Error deleting record: " . $connection;
            }
        }

    }
    else {
        echo "No fraudulent accounts found.";
    } 
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
