<?php
function getUser(string $user): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM $user");
    $stmt->execute();
    return $stmt->fetchAll();
}


function rejectNewUserRegistration($user){
    if (isset($_POST['reject'])) {
        return true;
    } else {
        return false;
    }
}

function approveNewUserRegistration($user){
    getAdmin();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['approve'])) {
            $user = $_POST['user'];
            approveNewUserRegistration($user);
        } else if (isset($_POST['reject'])) {
            $user = $_POST['user'];
            rejectNewUserRegistration($user);
        }
    }
}
