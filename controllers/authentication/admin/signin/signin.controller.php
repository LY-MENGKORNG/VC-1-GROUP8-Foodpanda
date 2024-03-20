<?php
if (isset($_SESSION["admin"])) {
    header("Location: /admin");
    die();
}
require "./views/authentication/signin/admin_signin.view.php";
