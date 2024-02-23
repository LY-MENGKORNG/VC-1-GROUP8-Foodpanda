<?php
function getUser(string $user): array
{
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM $user");
    $stmt->execute();
    return $stmt->fetchAll();
}

function updateUserAcc(string $user_id, string $newName, string $newEmail){
    global $connection;

    $sql_update = $connection->prepare("update users set (user_id, newName, newEmail) values (user_id, :newName, :newEmail)");
    $sql_update->execute([
        "user_id" => $user_id,
        "newName" => $newName,
        "newEmail" => $newEmail
    ]);
    if ($sql_update->execute()) {
        if ($sql_update->rowCount() > 0) {
            echo "User account updated successfully";
        } else {
            echo "User account update failed";
        }
    } else {
        echo "Error updating user";
    }
}



