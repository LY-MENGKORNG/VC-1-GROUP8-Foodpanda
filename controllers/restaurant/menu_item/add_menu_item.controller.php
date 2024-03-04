<?php
$owner_id = $restaurant_owner["user_id"];
var_dump(getRestaurantByOwnerId(intval($owner_id)));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(($_POST["category_name"]))) {
        # code...
    }
}
