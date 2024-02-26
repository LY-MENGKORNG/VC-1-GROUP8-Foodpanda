<?php
session_start();

if (isset($_SESSION["admin"])) {
    header("Location: /admin");
    die();
}
require "./views/signup/admin_signup.view.php";
<<<<<<< HEAD:controllers/authentication/admin/signup/signup.controller.php
=======
?>
>>>>>>> view_order_status:controllers/signup/admin_signup.controller.php
