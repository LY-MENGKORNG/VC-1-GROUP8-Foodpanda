<?php
require "./database/database.php";

function checkUser($user) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM " . $user);
    $stmt->execute();
    return $stmt->fetchAll();
}

?>