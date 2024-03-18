<?php

// customer edit profile
function customerEditProfile(string $first_name, string $last_name, string $email, string $phone, string $user_id)
{
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

function getRestaurantInfo(): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM restaurant_info");
    $stmt->execute();
    return $stmt->fetchAll();
}

// get all categories
function getCategories()
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM categories");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getFoodsInfo(): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM food_info");
    $stmt->execute();
    return $stmt->fetchAll();
}
function getFoodInfoById($food_id): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM food_info WHERE food_id = :food_id");
    $stmt->execute([":food_id" => $food_id]);
    return $stmt->fetch();
}
function getFoodInfoByRestaurantId($restaurant_id): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM food_info WHERE restaurant_id = :restaurant_id");
    $stmt->execute([":restaurant_id" => $restaurant_id]);
    return $stmt->fetchAll();
}

function getFoodsByCateId($cate_id = null)
{
    global $connection;
    if ($cate_id) {
        $stmt = $connection->prepare(
            "SELECT * FROM cate_food WHERE cate_id = :cate_id"
        );
        $stmt->execute([":cate_id" => $cate_id]);
    } else {
        $stmt = $connection->prepare(
            "SELECT * FROM cate_food"
        );
        $stmt->execute();
    }
    return $stmt->fetchAll();
}

function addAddress(string $address_name, string $address_type, int $delivery_id, int $customer_id): bool
{
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

function getAddress()
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM address");
    $stmt->execute();
    return $stmt->fetchAll();
}

function addCheckout(int $food_id, int $quantity, int $price_amount, int $user_id,  string $food_name)
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO checkout (food_id, quantity, price_amount, user_id, food_name) 
                                VALUES (:food_id, :quantity, :price_amount, :user_id, :food_name)");
    $stmt->execute([
        ":food_id" => $food_id,
        ":quantity" => $quantity,
        ":price_amount" => $price_amount,
        ":user_id" => $user_id,
        ":food_name" => $food_name
    ]);
    return $stmt->rowCount() > 0;
}

function addPayment(
    int $user_id,
    string $card_number,
    string $valid_through,
    string $card_name,
    string $cvv,
    int $payment_amount,
    string $promo_code
): bool {
    global $connection;
    $stmt = $connection->prepare(
        "INSERT INTO payments (user_id, card_number, valid_through, card_name, cvv, payment_amount, promo_code) 
        VALUES (:user_id, :card_number, :valid_through, :card_name, :cvv, :payment_amount, :promo_code)"
    );
    $stmt->execute([
        ":user_id" => $user_id,
        ":card_number" => $card_number,
        ":valid_through" => $valid_through,
        ":card_name" => $card_name,
        ":cvv" => $cvv,
        ":payment_amount" => $payment_amount,
        "promo_code" => $promo_code
    ]);
    return $stmt->rowCount() > 0;
}

function addOrder(
    int $customer_id,
    int $delivery_id,
    string $order_progress,
    string $restaurant_name,
    string $restaurant_img
): bool {
    global $connection;
    $stmt = $connection->prepare("INSERT INTO orders 
    (customer_id, delivery_id, order_status, restaurant_name, restaurant_img) 
    VALUES (:cuz_id, :deli_id, :progress, :restaurant_name, :restaurant_img)");

    $stmt->execute([
        ":cuz_id" => $customer_id,
        ":deli_id" => $delivery_id,
        ":progress" => $order_progress,
        ":restaurant_name" => $restaurant_name,
        ":restaurant_img" => $restaurant_img
    ]);
    return $stmt->rowCount() > 0;
}

function getOrders($status, $customer_id): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orders WHERE order_status = :status AND customer_id = :customer_id");
    $stmt->execute([":status" => $status, ":customer_id" => $customer_id]);
    return $stmt->fetchAll();
}

function getCheckoutById($customer_id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM checkout WHERE user_id = :user_id");
    $stmt->execute([":user_id" => $customer_id]);
    return $stmt->fetchAll();
}