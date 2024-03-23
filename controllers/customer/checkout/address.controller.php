<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $customer["user_id"];
    var_dump($_POST);
    if (
        !empty ($_POST["address_name"]) && !empty ($_POST["address_type"]) && !empty ($_POST["delivery_id"]) &&
        !empty ($_POST["latitude"]) && !empty ($_POST["longitude"]) 
    ) {
        addAddress(
            $_POST["address_name"],
            $_POST["address_type"],
            intval($_POST["delivery_id"]),
            $customer_id,
            $_POST["latitude"],
            $_POST["longitude"]
        );
    }
    header("Location: /customer/checkout");
}