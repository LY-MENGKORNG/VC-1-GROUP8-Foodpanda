<?php 
session_start();
if (count(getRestaurant()) == 1 || isset($_SESSION["restaurant"])) {
    header("Location: /restuarant");
    die();
}else {
require "views/signin/restaurant_signin.view.php";}
?>