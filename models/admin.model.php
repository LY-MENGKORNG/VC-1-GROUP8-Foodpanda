<?php
<<<<<<< HEAD
=======


>>>>>>> 3f8d5566085aa9041fc4b0d2932f1f54500665ea
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

function createRestaurant(int $owner_id, string $restaurant_name, string $location, string $email, string $password,
                        string $contact_info, string $restaurant_img, string $description)  
{
    global $connection;
    $stmt = $connection->prepare("INSERT INTO restaurants 
    (owner_id, restaurant_name, location, email, password, contact_info, restaurant_img, description) VALUES 
    (:owner_id, :restaurant_name, :location, :email, :password, :contact_info, :restaurant_img, :description)");

    $stmt->execute([
        ":owner_id" => $owner_id,
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
    $stmt = $connection->prepare("SELECT users.first_name, users.last_name, restaurants.restaurant_id, 
    restaurants.owner_id, restaurants.restaurant_name, restaurants.location, restaurants.email, 
    restaurants.rating, restaurants.opening_hours, restaurants.contact_info, restaurants.description, 
    restaurants.restaurant_img FROM users RIGHT JOIN restaurants ON users.user_id = restaurants.owner_id 
    WHERE restaurants.restaurant_id = :id");

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

function createRestuarantOwner($first_name, $last_name, $email, $password, $phone, $profile): bool
{
    date_default_timezone_get();
    $registration_date = date("Y-m-d H:i:s");

    global $connection;
    $role_id = 2;
    $stmt = $connection->prepare("INSERT INTO Users (first_name, last_name, email, password, phone, profile, registration_date, role_id) VALUES 
                                (:first_name, :last_name, :email, :password, :phone, :profile, :registration_date, :role_id);");
    $stmt->execute([
        ':first_name' => $first_name,
        ':last_name' => $last_name,
        ':email' => $email,
        ':password' => $password,
        ':phone' => $phone,
        ':profile' => $profile,
        ':registration_date' => $registration_date,
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