<?php 
session_start();
$is_admin_email = isset($_SESSION["is_admin_email"]) ? $_SESSION['is_admin_email'] : "";
$is_admin_password = isset($_SESSION["is_admin_password"]) ? $_SESSION['is_admin_password'] : "";
require "./views/signout/admin_signout.view.php";