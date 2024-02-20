<?php
function createCustomer(string $first_name, string $last_name, string $email, string $password,) {
    date_default_timezone_get();
    $registration_date = date("Y-m-d H:i:s");

    global $connection;
    $stmt = $connection->prepare("INSERT INTO customers (first_name, last_name, email, password, registration_date) 
                                VALUES (:first_name, :last_name, :email, :password, :registration_date);");
    $stmt->execute([
        ":first_name" => $first_name,
        ":last_name" => $last_name,
        ":email" => $email,
        ":password" => $password,
        ":registration_date" => $registration_date
    ]);
    return $stmt->rowCount() > 0;
}