<?php 
require "database/database.php";

function getAdminLogin() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Admin");
    $stmt->execute();
    $test = $stmt->fetchAll();
    return count($test ) > 0;
}

function getCustomerLogin($id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Customer");
    $stmt->execute();
    $test = $stmt->fetchAll();
    return count($test ) > 0;
}

function getDeliveryLogin($id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Deliveries");
    $stmt->execute();
    $test = $stmt->fetchAll();
    return count($test ) > 0;
}

function getRestaurantLogin($id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Deliveries");
    $stmt->execute();
    $test = $stmt->fetchAll();
    return count($test) > 0;
}

?>