<?php
function getUser(string $user): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM $user");
    $stmt->execute();
    return $stmt->fetchAll();
}