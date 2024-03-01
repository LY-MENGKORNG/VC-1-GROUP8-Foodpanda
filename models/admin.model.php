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

function getRestaurantById($id)  {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM restaurants WHERE restaurant_id = :id");
    $stmt->execute([':id' => $id]);
    return $stmt->fetch();
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

function editRestaurant($rest_id, $rest_name, $owner_id, $email, $location, $contact_info, $img, $desc) {
    global $connection;
    $stmt = $connection->prepare(
        "UPDATE restaurants SET restaurant_name = :rest_name, owner_id = :owner_id, email = :email,
        location = :location, contact_info = :contact_info, restaurant_img = :img, description = :desc
        WHERE restaurant_id = :rest_id
    ");
    echo $img;
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