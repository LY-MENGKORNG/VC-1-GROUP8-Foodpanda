<?php
// get all restaurant
function getAllRestaurants() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Restaurants");
    $stmt->execute();
    return $stmt->fetchAll();
}

// get Restaurant by ID 
function getRestaurant($id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Restaurants WHERE restaurant_id = :id");
    $stmt->execute([":id" => $id]);
    return $stmt->fetch();
}

