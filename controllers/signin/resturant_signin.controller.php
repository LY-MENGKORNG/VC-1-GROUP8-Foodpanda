<?php 
session_start();
if (count(getRestaurant()) == 1 || isset($_SESSION["restaurant"])) {
    header("Location: /restuarant");
    die();
}else {
require "./views/restaurant/restaurant.view.php";}
?>