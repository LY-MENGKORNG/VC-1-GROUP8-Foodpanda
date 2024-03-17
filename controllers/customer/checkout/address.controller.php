<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $customer["user_id"];
    if (!empty($_POST["address_name"]) && !empty($_POST["address_type"]) && !empty($_POST["delivery_id"])) {
        addAddress($_POST["address_name"], $_POST["address_type"], intval($_POST["delivery_id"]), $customer_id);
    }
    header("Location: /customer/checkout");
}