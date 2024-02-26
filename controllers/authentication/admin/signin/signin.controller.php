<?php
session_start();
if (count(getAdmin()) == 1 || isset($_SESSION["admin"])) {
    header("Location: /admin");
    die();
}
require "./views/signin/admin_signin.view.php";
