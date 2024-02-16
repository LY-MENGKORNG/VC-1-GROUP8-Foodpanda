<?php
require "./database/database.php";

function checkUser($user) {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM " . $user);
    $stmt->execute();
    return $stmt->fetchAll();
}

function getUser(string $email): array
{
    global $connection;
    $statement = $connection->prepare("SELECT * FROM Admin where email = :email");
    $statement->execute([':email' => $email]);
    return $statement->fetchAll();
}

?>