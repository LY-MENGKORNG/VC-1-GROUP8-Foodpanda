
<?php 
// get Restaurant by ID 
function getRestaurant($id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Restaurants WHERE restaurant_id = :id");
    $stmt->execute([":id" => $id]);
    return $stmt->fetch();
}

function getRestaurantByOwner($owner_id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM restaurants WHERE owner_id = :owner_id");
    $stmt->execute([":owner_id" => $owner_id]);
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

function getCategory() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM categories");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getAllFood() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM foods");
    $stmt->execute();
    return $stmt->fetchAll();
}
function createCategory(int $restaurant_id, string $cate_name, string $description, $item_img){
    global $connection;
    $stmt = $connection->prepare("INSERT INTO menuitems (restaurant_id, cate_name, description,item_img) VALUES (:id, :cate_name, :description,:item_img)");
    $stmt -> execute([
        ":id" => $restaurant_id,
        ":cate_name" => $cate_name,
        ":description" => $description,
        ":item_img" => $item_img
    ]);
    return $stmt-> rowCount() > 0;
}

function createFood(int $item_id, string $food_name, string $image, int $quantity, int $price, int $rating) {
    global $connection;
    $stmt = $connection->prepare("INSERT INTO foods (item_id, food_name, image, quantity, price, rating) 
                                    VALUES (:item_id, :food_name, :image, :quantity, :price, :rating)");
    
    $stmt->execute([
        ":item_id" => $item_id,
        ":food_name" => $food_name,
        ":image" => $image,
        ":quantity" => $quantity,
        ":price" => $price,
        ":rating" => $rating
    ]);
    return $stmt-> rowCount() > 0;
}   

// customer edit profile
function ownerEditProfile(string $first_name, string $last_name, string $email, string $phone, string $user_id) {
    global $connection;
    $role_id = 2;
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
