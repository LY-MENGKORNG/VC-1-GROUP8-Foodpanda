<?php
// get Restaurant by ID 
function getRestaurant($id)
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Restaurants WHERE restaurant_id = :id");
    $stmt->execute([":id" => $id]);
    return $stmt->fetch();
}

function getRestaurantByOwner($owner_id)
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM restaurants WHERE owner_id = :owner_id");
    $stmt->execute([":owner_id" => $owner_id]);
    return $stmt->fetch();
}

function updateRestaurant($restaurant_id, $admin_id, $restaurant_name, $owner_name, $email, $password, $location, $rating, $opening_hour, $contect_info, $description, $is_open)
{
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
    return $stmt->rowCount() > 0;
}

function getCategory()
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM categories");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getCateById($id)
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM categories WHERE cate_id = :id");
    $stmt->execute([":id" => $id]);
    return $stmt->fetch();
}

function getAllFood()
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM foods");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getFoodsByOwner($id)
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM food_info WHERE owner_id = :id");
    $stmt->execute([":id" => $id]);
    return $stmt->fetchAll();
}
function createCategory(int $restaurant_id, string $cate_name, string $description, $cate_img)
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO categories (restaurant_id, cate_name, description, cate_img) VALUES 
                                (:id, :cate_name, :description,:cate_img)");
    $stmt->execute([
        ":id" => $restaurant_id,
        ":cate_name" => $cate_name,
        ":description" => $description,
        ":cate_img" => $cate_img
    ]);
    return $stmt->rowCount() > 0;
}

function editCategory(int $cate_id, string $cate_name, string $description, string|array $cate_img): bool
{
    global $connection;
    $stmt = $connection->prepare("UPDATE categories SET cate_name = :cate_name, description = :description, 
                                cate_img = :cate_img WHERE cate_id = :cate_id");
    $stmt->execute([
        ":cate_name" => $cate_name,
        ":description" => $description,
        ":cate_img" => $cate_img,
        ":cate_id" => $cate_id
    ]);
    return $stmt->rowCount() > 0;
}

function deleteCategory($id)
{
    global $connection;
    $stmt = $connection->prepare("DELETE FROM categories where cate_id = :id");
    $stmt->execute([":id" => $id]);
    return $stmt->rowCount() > 0;
}

function createFood(int $cate_id, string $food_name, string $image, int $quantity, int $price, int $rating)
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO foods (cate_id, food_name, image, quantity, price, rating) 
                                    VALUES (:cate_id, :food_name, :image, :quantity, :price, :rating)");

    $stmt->execute([
        ":cate_id" => $cate_id,
        ":food_name" => $food_name,
        ":image" => $image,
        ":quantity" => $quantity,
        ":price" => $price,
        ":rating" => $rating
    ]);
    return $stmt->rowCount() > 0;
}

function editFood(int $food_id, string $food_name, string $image, int $price, int $quantity, int $rating, int $cate_id): bool
{
    global $connection;
    $stmt = $connection->prepare("UPDATE foods SET food_name = :food_name, image = :image, price = :price, 
                            quantity = :quantity, rating = :rating, cate_id = :cate_id WHERE food_id = :food_id");
    $stmt->execute([
        ":food_id" => $food_id,
        ":food_name" => $food_name,
        ":image" => $image,
        ":price" => $price,
        ":quantity" => $quantity,
        ":rating" => $rating,
        ":cate_id" => $cate_id
    ]);
    return $stmt->rowCount() > 0;
}
function deleteFood($id)
{
    global $connection;
    $stmt = $connection->prepare("DELETE FROM foods where food_id = :id");
    $stmt->execute([":id" => $id]);
    return $stmt->rowCount() > 0;
}

function getAllOrderInRestaurant(string $restaurant_name)
{
    global $connection;
    $stmt = $connection->prepare(
        "SELECT orders.order_id, orders.delivery_id, orders.order_status, orders.order_date, orders.restaurant_name, orders.deliver_date, 
        orders.restaurant_img, orders.address_id, users.first_name, users.last_name, users.email, users.profile, payments.payment_amount
        FROM users 
        INNER JOIN orders ON orders.customer_id = users.user_id 
        INNER JOIN payments ON users.user_id = payments.user_id
        WHERE orders.restaurant_name = :restaurant_name GROUP BY orders.order_id;"
    );
    $stmt->execute([
        ":restaurant_name" => $restaurant_name
    ]);
    return $stmt->fetchAll();
}