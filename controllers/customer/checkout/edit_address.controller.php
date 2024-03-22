<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $customer["user_id"];
    if (
        !empty ($_POST["address_name"]) && !empty ($_POST["address_type"]) && !empty ($_POST["delivery_id"]) &&
        !empty ($_POST["latitude"]) && !empty ($_POST["longitude"]) && !empty ($_POST["address_id"])
    ) {
        editAddress(
            $_POST["address_id"],
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