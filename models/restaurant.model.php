
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
function createCategory($restaurant_id,$cuisine,$description){
    global $connection;
    $stmt = $connection->prepare("INSERT INTO menuItems (restaurant_id, cuisine, description) VALUES (:id, :cuisine, :description)");
    $stmt -> execute([
        ":id" => $restaurant_id,
        ":cuisine" => $cuisine,
        ":description" => $description
    ]);
    return $stmt-> rowCount() > 0;
    
}

