<?php
require "./models/admin.model.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = secureData($_POST['email']);
    $password = secureData($_POST['password']);
    header("Location: /admin");
}

?>