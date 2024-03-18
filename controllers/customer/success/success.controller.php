<?php
header('Cache-Control: no cache');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["food_id"]) && !empty($_POST["quantity"]) && !empty($_POST["price"])) {
        $food_ids = $_POST["food_id"];
        $quantities = $_POST["quantity"];
        $price_amount = $_POST["price"];
        $user_id = $customer["user_id"];
        
        for ($i=0; $i < count($food_ids); $i++) { 
            addCheckout(intval($food_ids[$i]), intval($quantities[$i]), intval($price_amount[$i]), intval($user_id));
        }

        echo `<script> localStorage.removeItem("cart") </script>`;
    }
}
require "./views/customer/success/success.view.php";