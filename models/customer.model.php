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
    $stmt = $connection->prepare("SELECT * FROM foods_info");
    $stmt->execute();
    return $stmt->fetchAll();
}
function getFoodInfoById($food_id) : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM foods_info WHERE food_id = :food_id");
    $stmt->execute([":food_id" => $food_id]);
    return $stmt->fetch();
}

function getFoodInfoByCateId($cate_id) : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM foods_info WHERE cate_id = :cate_id");
    $stmt->execute([":cate_id" => $cate_id]);
    return $stmt->fetch();
}

function getFoodsById($cate_id = null) {
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