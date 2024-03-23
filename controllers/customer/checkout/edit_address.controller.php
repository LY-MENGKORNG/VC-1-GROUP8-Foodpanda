<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $customer["user_id"];
    var_dump($_POST);
    if (
        !empty ($_POST["address_name"]) && !empty ($_POST["address_type"]) && !empty ($_POST["delivery_id"]) &&
        !empty ($_POST["edit_latitude"]) && !empty ($_POST["edit_longitude"]) && !empty ($_POST["address_id"])
    ) {
        editAddress(
            $_POST["address_id"],
            $_POST["address_name"],
            $_POST["address_type"],
            intval($_POST["delivery_id"]),
            $customer_id,
            $_POST["edit_latitude"],
            $_POST["edit_longitude"]
        );
    }
    header("Location: /customer/checkout");
}