<?php
require_once "../database/database.php";
function admin_verify_email($email, $token) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        global $connection;
        $statement = $connection->prepare("SELECT * FROM users where email = :email and token = :token");
        $statement->execute([
            ":email" => $email,
            ":token" => $token
        ]);

        if ($statement->rowCount() > 0) {
            // Email verified successfully
            return true;
        } else {
            // Invalid verification email
            return false;
        }
    }
}
