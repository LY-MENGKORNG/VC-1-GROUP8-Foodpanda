<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $restaurant_id = $_POST["restaurant_id"];
}else {
    header("Location: /admin/manage_restaurant");
    die();
}
$target_file_dir = "/assets/images/uploads/restaurants/";

$restaurant = getRestaurantById($restaurant_id);
$owners = getOwner();
var_dump($owners);
$owner_name = $owners[0]["user_id"] == $restaurant["owner_id"] ? $owners[0]["first_name"] : "Admin";

$restaurant_name = $restaurant["restaurant_name"];
$image = $restaurant["restaurant_img"];
$contact = $restaurant["contact_info"];
$desc = $restaurant["description"];


require "./views/admin/manage_restaurant/restaurant_detail.view.php";
?>