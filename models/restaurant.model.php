
<?php 
// get Restaurant by ID 
function getRestaurant($id) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM Restaurants WHERE restaurant_id = :id");
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

function getCategory() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM menuitems");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getAllFood() {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM foods");
    $stmt->execute();
    return $stmt->fetchAll();
}
function createCategory(int $restaurant_id, string $cate_name, string $description){
    global $connection;
    $stmt = $connection->prepare("INSERT INTO menuItems (restaurant_id, cate_name, description) VALUES (:id, :cate_name, :description)");
    $stmt -> execute([
        ":id" => $restaurant_id,
        ":cate_name" => $cate_name,
        ":description" => $description
    ]);
    return $stmt-> rowCount() > 0;
    
}

function getRestaurantByOwnerId($owner_id) {
    global $connection;
    $stmt = $connection->prepare(
        "SELECT restaurants.restaurant_id FROM restaurants 
        JOIN users ON users.user_id = restaurants.owner_id WHERE restaurants.owner_id = :owner_id;");
    $stmt->execute([":owner_id" => $owner_id]);
    return $stmt->fetchAll();
}

