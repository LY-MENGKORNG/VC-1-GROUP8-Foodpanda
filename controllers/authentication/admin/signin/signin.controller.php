<?php
<<<<<<< HEAD
session_start();
if (count(getAdmin()) == 1 || isset($_SESSION["admin"])) {
=======
if (isset($_SESSION["admin"])) {
>>>>>>> origin/restaurant_owner_register
    header("Location: /admin");
    die();
}
require "./views/signin/admin_signin.view.php";
?>
