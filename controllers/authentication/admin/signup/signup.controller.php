<?php
if (isset($_SESSION["admin"])) {
    header("Location: /admin");
    die();
}
require "./views/authentication/signup/admin_signup.view.php";