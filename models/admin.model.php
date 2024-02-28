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

