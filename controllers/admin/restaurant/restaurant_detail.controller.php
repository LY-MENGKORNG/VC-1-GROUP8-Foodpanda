<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $restaurant_id = $_POST["restaurant_id"];
}else {
    header("Location: /admin/manage_restaurant");
    die();
}
$restaurant = getRestaurantById($restaurant_id);
$owners = getOwner();
$target_file_dir = "/assets/images/uploads/restaurants/";

require "./views/admin/manage_restaurant/restaurant_detail.view.php";
