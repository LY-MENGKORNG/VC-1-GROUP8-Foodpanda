<?php
function editDelivery($first_name, $last_name, $email, $phone, $user_id){
    global $connection;
    $stmt = $connection->prepare(
        "UPDATE users SET first_name = :first_name, last_name = :last_name, 
        email = :email, phone = :phone WHERE user_id = :user_id
        AND role_id = :role_id");
    
    $stmt->execute([
        ":first_name" => $first_name,
        ":last_name" => $last_name,
        ":email" => $email,
        ":phone" => $phone,
        ":user_id" => $user_id,
        ":role_id" => 3
    ]);
    
    return $stmt-> rowCount() > 0;
}