<?php
session_start();
if (isset($_SESSION["admin"])) {
    header("Location: /admin");
    die();
}
require "./views/signup/admin_signup.view.php";
?>