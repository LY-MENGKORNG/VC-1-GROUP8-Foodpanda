<?php

// customer edit profile
function customerEditProfile(string $first_name, string $last_name, string $email, string $phone, string $user_id) {
    global $connection;
    $stmt = $connection->prepare("UPDATE users SET 
                    first_name = :first_name, last_name = :last_name, email = :email, phone = :phone 
                    WHERE user_id = :user_id");

    $stmt->execute([ 
        ":first_name" => $first_name,
        ":last_name" => $last_name,
        ":email" => $email,
        ":phone" => $phone,
        ":user_id" => $user_id
    ]);
    return $stmt->rowCount() > 0;
}

function getRestaurantInfo() : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM restaurant_info");
    $stmt->execute();
    return $stmt->fetchAll();
}

// get all categories
function getCategories() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM categories");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getFoodsInfo() : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM food_info");
    $stmt->execute();
    return $stmt->fetchAll();
}
function getFoodInfoById($food_id) : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM food_info WHERE food_id = :food_id");
    $stmt->execute([":food_id" => $food_id]);
    return $stmt->fetch();
}
function getFoodInfoByRestaurantId($restaurant_id) : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM food_info WHERE restaurant_id = :restaurant_id");
    $stmt->execute([":restaurant_id" => $restaurant_id]);
    return $stmt->fetchAll();
}

function getFoodsByCateId($cate_id = null) {
    global $connection;
    if ($cate_id) { 
        $stmt = $connection->prepare(
            "SELECT * FROM cate_food WHERE cate_id = :cate_id"
        );
        $stmt->execute([":cate_id" => $cate_id]);
    }else {
        $stmt = $connection->prepare(
            "SELECT * FROM cate_food"
        );
        $stmt->execute();
    }
    return $stmt->fetchAll();
}

function addCart($food_id, $restaurant_id, $user_id, $food_name, $quantity, $price) {
    // var_dump($food_id);
    global $connection;
    try {
        //code...
        $stmt = $connection->prepare(
            "INSERT INTO checkout (food_id, restaurant_id, user_id, food_name, quantity, price) 
            VALUES (:food_id, :restaurant_id, :user_id, :food_name, :quantity, :price)");
    
        $stmt->execute([
            ":food_id" => $food_id,
            ":restaurant_id" => $restaurant_id,
            ":user_id" => $user_id,
            ":food_name" => $food_name,
            ":quantity" => $quantity,
            ":price" => $price,
        ]);
        return $stmt->rowCount() > 0;
    } catch (\Throwable $th) {
        //throw $th;
        return $stmt->rowCount() > 0;
    }
}

function addAddress(string $address_name, string $address_type, int $delivery_id, int $customer_id) : bool {
    global $connection;
    $stmt = $connection->prepare("INSERT INTO address (address_name, address_type, delivery_id, customer_id) 
                    VALUES (:address_name, :address_type, :delivery_id, :customer_id)");
    $stmt->execute([
        ":address_name" => $address_name,
        ":address_type" => $address_type,
        ":delivery_id" => $delivery_id,
        ":customer_id" => $customer_id
    ]);
    return $stmt->rowCount() > 0;
}

function getAddress(){
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM address");
    $stmt->execute();
    return $stmt->fetchAll();
}