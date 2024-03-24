<?php 
$is_email = "";
$is_password = "";
if (isset($_SESSION["is_delivery_email"])) {
    $is_email = $_SESSION["is_delivery_email"];
}else if (isset($_SESSION["is_delivery_password"])) {
    $is_password = $_SESSION["is_delivery_password"];
}
require "./views/authentication/signin/delivery_signin.view.php"; 