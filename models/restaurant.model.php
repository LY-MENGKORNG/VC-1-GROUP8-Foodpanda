<?php 

function createRestaurant(int $admin_id, string $restaurant_name, string $owner_name, string $email, string $password, string $location, int $rating, string $opening_hour, string $contect_info, string $description, bool $is_open) : bool
{
    global $connection;
    $statement = $connection->prepare("INSERT INTO restaurants (restaurant_name, owner_name, email, password, location, rating, opening_hour, contect_info, description, is_open)
    VALUES (:restaurant_name, :owner_name, :email, :password, :location, :rating, :opening_hour, :contect_info, :description, :is_open)");
    $statement->execute([
        ':admin_id' => $admin_id,
        ':restauarnt_naem' => $restaurant_name,
        ':owner_name' => $owner_name,
        ':email' => $email,
        ':password' => $password,
        ':location' => $location,
        ':rating' => $rating,
        ':opening_hour' => $opening_hour,
        ':contect_info' => $contect_info,
        ':description' => $description,
        ':is_open' => $is_open,

    ]);

    return $statement->rowCount() > 0;
}

function getAllRestaurants(): array{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM rastaurants");
    $stmt->execute();
    return $stmt->fetchAll();
}
function getRestaurant(int $id): array{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM rastaurants WHERE restaurant_id = :id");
    $stmt->execute([":id" => $id]);
    return $stmt->fetch();
}

function updateRestaurant($restaurant_id, $admin_id, $restaurant_name, $owner_name, $email, $password, $location, $rating, $opening_hour, $contect_info, $description,$is_open){
    global $connection;
    $stmt = $connection->prepare("UPDATE restaurants SET admin_id = :admin_id, restaurant_name = :restaurant_name, owner_name = :owner_name, email = :email, password = :password, location = :location, rating = :rating, 
    opening_hour = :opening_hour, contect_info = :contect_info, description = :description, is_open = :is_open WHERE restaurant_id = :restaurant_id");
    $stmt->execute([
        ":admin_id" => $admin_id,
        ":restaurant_name" => $restaurant_name,
        ":owner_name" => $owner_name,
        ":email" => $email,
        ":password" => $password,
        ":location" => $location,
        ":rating" => $rating,
        ":opening_hour" => $opening_hour,
        ":contect_info" => $contect_info,
        ":description" => $description,
        ":is_open" => $is_open,
        ":restaurant_id" => $restaurant_id
    ]);
    return $stmt-> rowCount() > 0;
}

