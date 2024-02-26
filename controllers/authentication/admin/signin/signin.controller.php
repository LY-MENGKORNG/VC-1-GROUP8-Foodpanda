<?php
session_start();
<<<<<<< HEAD
if (count(getAdmin()) == 1 || isset($_SESSION["admin"])) {
=======
if (isset($_SESSION["admin"])) {
>>>>>>> 8f217c810d17c289be5e92d7a70b6d55e8aee870
    header("Location: /admin");
    die();
}
require "./views/signin/admin_signin.view.php";
