<?php
function rejectEmail($email, $password): bool {

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

function createRestaurant(string $restaurant_name, string $location, string $email, string $password,
                        string $contact_info, string $restaurant_img, string $description)  
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO restaurants 
    (restaurant_name, location, email, password, contact_info, restaurant_img, description) VALUES 
    (:restaurant_name, :location, :email, :password, :contact_info, :restaurant_img, :description)");

    $stmt->execute([
        ":restaurant_name" => $restaurant_name,
        ":location" => $location,
        ":email" => $email,
        ":password" => $password,
        ":contact_info" => $contact_info,
        ":restaurant_img" => $restaurant_img,
        ":description" => $description
    ]);
    return $stmt->rowCount() > 0;
}

function getAllRestaurants() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM restaurants");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getRestaurantById($id)  {
    global $connection;
    $stmt = $connection->prepare("SELECT users.first_name, users.last_name, restaurants.restaurant_id, 
    restaurants.owner_id, restaurants.restaurant_name, restaurants.location, restaurants.email, 
    restaurants.rating, restaurants.opening_hours, restaurants.contact_info, restaurants.description, 
    restaurants.restaurant_img FROM users RIGHT JOIN restaurants ON users.user_id = restaurants.owner_id 
    WHERE restaurants.restaurant_id = :id");

    $stmt->execute([':id' => $id]);
    return $stmt->fetch();
}

function restaurantDetail($id): array {
    global $connection;
    $stmt = $connection->prepare("SELECT res.restaurant_id, u.owner_id,  FROM restaurants WHERE restaurant_id = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch();
}

function editRestaurant($rest_id, $rest_name, $owner_id, $email, $location, $contact_info, $img, $desc) {
    global $connection;
    $stmt = $connection->prepare(
        "UPDATE restaurants SET restaurant_name = :rest_name, owner_id = :owner_id, email = :email,
        location = :location, contact_info = :contact_info, restaurant_img = :img, description = :desc
        WHERE restaurant_id = :rest_id
    ");
    echo $img;
    $stmt->execute([
        ":rest_name" => $rest_name,
        ":owner_id" => $owner_id,
        ":email" => $email,
        ":location" => $location,
        ":contact_info" => $contact_info,
        ":img" => $img,
        ":desc" => $desc,
        ":rest_id" => $rest_id
    ]);
    return $stmt->rowCount() > 0;
}