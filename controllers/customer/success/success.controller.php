<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);
}
require "./views/customer/success/success.view.php";