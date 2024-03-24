<?php
header('Cache-Control: no cache');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["order_tracking"])) {
        $order_tracking = getOneOrder(intval($delivery["user_id"]), intval($_POST["order_tracking"]));
    }
}
require "./views/delivery/tracking/tracking.view.php";