<?php
require "./views/signup/restaurant_signup.view.php";

session_start();
if (count(getRestaurant()) == 1 || isset($_SESSION["restaurant"])) {
    header("Location: /restaurant");
    die();
}

?>