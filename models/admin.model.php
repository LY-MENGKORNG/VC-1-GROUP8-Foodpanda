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


$customerId = 123;
$isAdmin = true;
function disableAccount($customerId, $isAdmin){
    
    if ($isAdmin){
        echo "Account with ID $customerId has been disabled successfully.";
    }
    else{
        echo "You do not have sufficient privileges to disable accounts.";
    }
    
}
 
// Function to check if the user is an admin
function isAdmin() {
    // Check if the user is logged in and if they have the 'admin' role in the session
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}
