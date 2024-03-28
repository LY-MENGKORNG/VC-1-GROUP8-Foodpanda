<?php

// customer edit profile
function customerEditProfile(string $first_name, string $last_name, string $email, string $phone, string $user_id)
{
    global $connection;
    $role_id = 4;
    $stmt = $connection->prepare("UPDATE users SET 
                    first_name = :first_name, last_name = :last_name, email = :email, phone = :phone 
                    WHERE user_id = :user_id AND role_id = :role_id");

    $stmt->execute([
        ":first_name" => $first_name,
        ":last_name" => $last_name,
        ":email" => $email,
        ":phone" => $phone,
        ":user_id" => $user_id,
        ":role_id" => $role_id
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
            "SELECT `categories`.`cate_id` AS `cate_id`,`categories`.`restaurant_id` AS `restaurant_id`,
            `categories`.`cate_name` AS `cate_name`,`categories`.
            `cate_img` AS `cate_img`,`foods`.`food_id` AS `food_id`,`foods`.`food_name` AS `food_name`,`foods`.`image` AS `image`,
            `foods`.`quantity` AS `quantity`,`foods`.`price` AS `price`,`foods`.`rating` AS `rating` 
            FROM (`categories` join `foods` on(`foods`.`cate_id` = `categories`.`cate_id`)) WHERE categories.cate_id = :cate_id"
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

function addAddress(string $address_name, string $address_type, int $delivery_id, int $customer_id, string $latitude, string $longitude): bool
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO address (address_name, address_type, delivery_id, customer_id, latitude, longitude) 
                    VALUES (:address_name, :address_type, :delivery_id, :customer_id, :latitude, :longitude)");
    $stmt->execute([
        ":address_name" => $address_name,
        ":address_type" => $address_type,
        ":delivery_id" => $delivery_id,
        ":customer_id" => $customer_id,
        ":latitude" => $latitude,
        ":longitude" => $longitude,
    ]);
    return $stmt->rowCount() > 0;
}

function editAddress(
    int $address_id,
    string $address_name,
    string $address_type,
    int $delivery_id,
    int $customer_id,
    string $latitude,
    string $longitude
): bool {
    global $connection;
    $stmt = $connection->prepare(
        "UPDATE address SET address_name = :address_name, address_type = :address_type, delivery_id = :delivery_id, 
        latitude = :latitude, longitude = :longitude
        WHERE address_id = :address_id AND customer_id = :customer_id"
    );
    $stmt->execute([
        ":address_id" => $address_id,
        ":address_name" => $address_name,
        ":address_type" => $address_type,
        ":delivery_id" => $delivery_id,
        ":customer_id" => $customer_id,
        ":latitude" => $latitude,
        ":longitude" => $longitude
    ]);
    return $stmt->rowCount() > 0;
}

function getAddress(int $customer_id)
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM address WHERE customer_id = :customer_id");
    $stmt->execute([":customer_id" => $customer_id]);
    return $stmt->fetchAll();
}

function addCheckout(int $food_id, int $quantity, int $price_amount, int $user_id, string $food_name, int $order_id)
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO checkout (food_id, quantity, price_amount, user_id, food_name, order_id) 
                                VALUES (:food_id, :quantity, :price_amount, :user_id, :food_name, :order_id)");
    $stmt->execute([
        ":food_id" => $food_id,
        ":quantity" => $quantity,
        ":price_amount" => $price_amount,
        ":user_id" => $user_id,
        ":food_name" => $food_name,
        ":order_id" => $order_id
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
    string $promo_code,
    string $method
): bool {
    global $connection;
    $stmt = $connection->prepare(
        "INSERT INTO payments (user_id, card_number, valid_through, card_name, cvv, payment_amount, promo_code, method) 
        VALUES (:user_id, :card_number, :valid_through, :card_name, :cvv, :payment_amount, :promo_code, :method)"
    );
    $stmt->execute([
        ":user_id" => $user_id,
        ":card_number" => $card_number,
        ":valid_through" => $valid_through,
        ":card_name" => $card_name,
        ":cvv" => $cvv,
        ":payment_amount" => $payment_amount,
        ":promo_code" => $promo_code,
        ":method" => $method
    ]);
    return $stmt->rowCount() > 0;
}

function addOrder(
    int $customer_id,
    int $delivery_id,
    string $order_progress,
    string $restaurant_name,
    string $restaurant_img,
    int $address_id
): bool {
    global $connection;
    $stmt = $connection->prepare("INSERT INTO orders 
    (customer_id, delivery_id, order_status, restaurant_name, restaurant_img, address_id) 
    VALUES (:cuz_id, :deli_id, :progress, :restaurant_name, :restaurant_img, :address_id)");

    $stmt->execute([
        ":cuz_id" => $customer_id,
        ":deli_id" => $delivery_id,
        ":progress" => $order_progress,
        ":restaurant_name" => $restaurant_name,
        ":restaurant_img" => $restaurant_img,
        ":address_id" => $address_id
    ]);
    return $stmt->rowCount() > 0;
}

function getAllOrders(): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orders");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getOrders($status, $customer_id): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orders WHERE order_status = :status AND customer_id = :customer_id");
    $stmt->execute([":status" => $status, ":customer_id" => $customer_id]);
    return $stmt->fetchAll();
}

function getCheckoutById($customer_id)
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM checkout WHERE user_id = :user_id");
    $stmt->execute([":user_id" => $customer_id]);
    return $stmt->fetchAll();
}

function getAllFavorite(): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM favorites");
    $stmt->execute();
    return $stmt->fetchAll();
}

function topSellingProduct() : array {
    global $connection;
    $stmt = $connection->prepare(
        "SELECT checkout.food_id, SUM(checkout.quantity) AS total_sales, foods.food_name, foods.cate_id, foods.image, 
        foods.price, foods.rating, foods.discount, categories.cate_name
        FROM checkout 
        INNER JOIN foods ON foods.food_id = checkout.food_id
        INNER JOIN categories ON categories.cate_id = foods.cate_id
        GROUP BY food_id
        ORDER BY total_sales DESC
        LIMIT 3;"
    );
    $stmt->execute();
    return $stmt->fetchAll();
}