<?php
// header('Cache-Control: no cache');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        !empty ($_POST["food_id"]) && !empty ($_POST["quantity"]) && !empty ($_POST["price"]) &&
        !empty ($_POST["card_name"]) && !empty ($_POST["valid_through"]) && !empty ($_POST["cvv_number"]) &&
        !empty($_POST["card_number"]) && !empty ($_POST["delivery_id"]) && !empty ($_POST["restaurant_name"]) &&
        !empty($_POST["promo_code"]) && !empty ($_POST["food_name"])
    ) {
        $food_ids = $_POST["food_id"];
        $quantities = $_POST["quantity"];
        $price_amount = $_POST["price"];
        $customer_id = $customer["user_id"];
        $delivery_id = $_POST["delivery_id"];
        $restaurant_name = is_array($_POST["restaurant_name"]) ? $_POST["restaurant_name"][0] : $_POST["restaurant_name"];
        $restaurant_img = $_POST["restaurant_img"];
        $food_name = $_POST["food_name"];
        $payment_amount = 0;
        for ($i=0; $i < count($food_ids); $i++) { 
            $payment_amount += intval($price_amount[$i]);
            addCheckout(intval($food_ids[$i]), intval($quantities[$i]), intval($price_amount[$i]), intval($customer_id), $food_name[$i]);
        }
        
        // ----------------------------------------------------------------
        $card_name = $_POST["card_name"];
        $valid_through = $_POST["valid_through"];
        $cvv = $_POST["cvv_number"];
        $card_number = $_POST["card_number"];
        $promo_code = $_POST["promo_code"];
        addPayment(intval($customer_id), $card_name, $valid_through, $card_name, $cvv, intval($payment_amount), $promo_code);

        // ----------------------------------------------------------------
        addOrder(intval($customer_id), intval($delivery_id), "On progress", $restaurant_name, $restaurant_img);
    }
}
require "./views/customer/success/success.view.php";