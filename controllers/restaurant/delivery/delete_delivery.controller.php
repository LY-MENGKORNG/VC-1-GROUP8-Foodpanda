<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["user_id"];
    deleteDelivery(intval($id));
    header("Location: /restaurant/delivery");
}