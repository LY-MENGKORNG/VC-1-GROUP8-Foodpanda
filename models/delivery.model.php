<?php 

function getAllOrders($delivery_id) : array {
    global $connection;
    $stmt = $connection->prepare(
        "SELECT orders.order_id, orders.delivery_id, orders.order_status, orders.order_date, orders.restaurant_name, orders.deliver_date, 
        orders.restaurant_img, orders.address_id, users.first_name, users.last_name, users.email, users.profile, payments.payment_amount
        FROM users INNER JOIN orders ON orders.customer_id = users.user_id INNER JOIN payments ON users.user_id = payments.user_id
        WHERE orders.delivery_id = :delivery_id GROUP BY orders.order_id;"
    );
    $stmt->execute([
        ":delivery_id" => $delivery_id
    ]);
    return $stmt->fetchAll();
}
function getAllOrder($status, $delivery_id) : array {
    global $connection;
    $stmt = $connection->prepare(
        "SELECT orders.order_id, orders.delivery_id, orders.order_status, orders.order_date, orders.restaurant_name, orders.deliver_date, 
        orders.restaurant_img, orders.address_id, users.first_name, users.last_name, users.email, users.profile
        FROM users INNER JOIN orders ON orders.customer_id = users.user_id WHERE order_status = :status AND delivery_id = :delivery_id"
    );
    $stmt->execute([
        ":status" => $status,
        ":delivery_id" => $delivery_id
    ]);
    return $stmt->fetchAll();
}

function getAllNoti($delivery_id) : array {
    global $connection;
    $stmt = $connection->prepare(
        "SELECT orders.order_id, orders.delivery_id, orders.order_status, orders.order_date, orders.restaurant_name, orders.deliver_date, 
        orders.restaurant_img, orders.address_id, users.first_name, users.last_name, users.email, users.profile, payments.payment_amount, 
        address.address_name FROM users 
        INNER JOIN orders ON orders.customer_id = users.user_id 
        INNER JOIN payments ON users.user_id = payments.user_id
        INNER JOIN address ON address.address_id = orders.address_id 
        WHERE orders.delivery_id = :delivery_id GROUP BY orders.order_id;"    
    );
    $stmt->execute([":delivery_id" => $delivery_id]);
    return $stmt->fetchAll();   
}