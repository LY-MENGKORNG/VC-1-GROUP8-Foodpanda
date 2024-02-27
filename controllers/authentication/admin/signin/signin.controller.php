<?php
if (isset($_SESSION["admin"])) {
    header("Location: /admin");
    die();
}
require "./views/signin/admin_signin.view.php";
?>
