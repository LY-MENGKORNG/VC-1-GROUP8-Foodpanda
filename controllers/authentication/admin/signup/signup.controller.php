<?php
session_start();

<<<<<<< HEAD
if (isset($_SESSION["admin"])) {
=======
if (count(getAdmin()) >= 1 || isset($_SESSION["admin"])) {
>>>>>>> origin/restaurant_owner_register
    header("Location: /admin");
    die();
}
require "./views/signup/admin_signup.view.php";
<<<<<<< HEAD:controllers/authentication/admin/signup/signup.controller.php
=======
?>
>>>>>>> view_order_status:controllers/signup/admin_signup.controller.php
