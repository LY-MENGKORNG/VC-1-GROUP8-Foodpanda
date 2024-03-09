<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(($_POST["item_id"]))) {
        $item_id = $_POST["item_id"];
        $foods = getFoodsById($item_id);
    }
}
require "./views/customer/trending/trending.view.php";