<?php

function createRestaurant(int $owner_id, string $restaurant_name, string $location, string $email,
                        string $contact_info, string $restaurant_img, string $description)  
{
    try {
        global $connection;
        $stmt = $connection->prepare("INSERT INTO restaurants 
        (owner_id, restaurant_name, location, email, contact_info, restaurant_img, description) VALUES 
        (:owner_id, :restaurant_name, :location, :email, :contact_info, :restaurant_img, :description)");
    
        $stmt->execute([
            ":owner_id" => $owner_id,
            ":restaurant_name" => $restaurant_name,
            ":location" => $location,
            ":email" => $email,
            ":contact_info" => $contact_info,
            ":restaurant_img" => $restaurant_img,
            ":description" => $description
        ]);
        return true;
    } catch (\Throwable $th) {
        return false;
    }
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
    restaurants.rating, restaurants.opening_hour, restaurants.contact_info, restaurants.description, 
    restaurants.restaurant_img FROM users RIGHT JOIN restaurants ON users.user_id = restaurants.owner_id 
    WHERE restaurants.restaurant_id = :id");

    $stmt->execute([':id' => $id]);
    return $stmt->fetch();
}

function getRestaurantInfo() : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM restaurant_info");
    $stmt->execute();
    return $stmt->fetchAll();
}

function restaurantDetail(string $menu_items, string $opening_hours, string $contact_info){

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        global $connection;
        $menu_items = $_POST['menu_items'];
        $opening_hours = $_POST['opening_hours'];
        $contact_info = $_POST['contact_info'];

        $connection = "UPDATE restaurants SET menu_items='$menu_items', opening_hours='$opening_hours', contact_info='$contact_info'";
        $result = $connection($menu_items, $opening_hours, $contact_info);

        if ($result !== false){
            echo "Restaurant details updated successfully";
        } else {
            echo "Restaurant details update failed ";
        }
        return $result;
    }
}

function createRestuarantOwner($first_name, $last_name, $email, $password, $phone, $profile): bool
{
    global $connection;
    $role_id = 2;
    $stmt = $connection->prepare("INSERT INTO Users (first_name, last_name, email, password, phone, profile, role_id) VALUES 
                                (:first_name, :last_name, :email, :password, :phone, :profile, :role_id);");
    $stmt->execute([
        ':first_name' => $first_name,
        ':last_name' => $last_name,
        ':email' => $email,
        ':password' => $password,
        ':phone' => $phone,
        ':profile' => $profile,
        ':role_id' => $role_id
    ]);
    return $stmt->rowCount() > 0;
}

function editRestaurant($rest_id, $rest_name, $owner_id, $email, $location, $contact_info, $img, $desc) {
    global $connection;
    $stmt = $connection->prepare(
        "UPDATE restaurants SET restaurant_name = :rest_name, owner_id = :owner_id, email = :email,
        location = :location, contact_info = :contact_info, restaurant_img = :img, description = :desc
        WHERE restaurant_id = :rest_id
    ");
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

function listOrders() : array {
    global $connection;
    $stmt = $connection->prepare(
        "SELECT orders.order_id, orders.delivery_id, orders.order_status, orders.order_date, orders.restaurant_name, orders.deliver_date, 
        orders.restaurant_img, orders.address_id, users.first_name, users.last_name, users.email, users.profile, payments.payment_amount, 
        address.address_name, address.latitude,  address.longitude FROM users 
        INNER JOIN orders ON orders.customer_id = users.user_id 
        INNER JOIN payments ON users.user_id = payments.user_id
        INNER JOIN address ON address.address_id = orders.address_id 
        GROUP BY orders.order_id;"    
    );
    $stmt->execute();
    return $stmt->fetchAll();   
} 

function getTopCate() : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM categories LIMIT 5");
    $stmt->execute();
    return $stmt->fetchAll();
}