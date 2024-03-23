<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["email"])) {
        $customer_verify = accountExist($_POST["email"], 4);
        if (count($customer_verify) == 0) {
            $_SESSION["is_customer_email"] = "Email not found";
            header("Location: /customer/forgot_password");
            die();
        }

        // send confirmation to customer email
        $_SESSION["email_sent"] = true;
        


        unset($_SESSION["is_customer_email"]);
        header("Location: /customer/signin");
    }
}