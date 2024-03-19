<?php 
function getAllOrders(int $delivery_id) : array {
    global $connection;
    $stmt = $connection->prepare("SELECT * FROM orders WHERE delivery_id = :delivery_id");
    $stmt->execute([":delivery_id" => $delivery_id]);
    return $stmt->fetchAll();
}

function getOrderByStatus($status, $delivery_id) {
    global $connection;
    $stmt = $connection->prepare(
        "SELECT address.address_id, address_name, address.address_type, address.delivery_id, address.customer_id, orders.order_id, 
        orders.customer_id, orders.order_status, orders.order_date, orders.restaurant_name, orders.restaurant_img, orders.deliver_date 
        FROM address INNER JOIN orders ON address.address_id = orders.address_id WHERE orders.order_status = :status AND address.delivery_id = :delivery_id;"
    );

    $stmt->execute([":status" => $status, ":delivery_id" => $delivery_id]);
    return $stmt->fetchAll();
}