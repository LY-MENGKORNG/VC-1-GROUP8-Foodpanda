<?php 
$is_email = "";
$is_password = "";
if (isset($_SESSION["is_owner_email"])) {
    $is_email = $_SESSION["is_owner_email"];
}else if (isset($_SESSION["is_owner_password"])) {
    $is_password = $_SESSION["is_owner_password"];
}
require "./views/authentication/signin/restaurant_signin.view.php"; 
