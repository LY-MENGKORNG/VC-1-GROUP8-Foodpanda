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

