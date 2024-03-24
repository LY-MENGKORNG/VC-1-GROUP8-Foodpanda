<?php
header('Cache-Control: no cache');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(($_POST["cate_id"]))) {
        $cate_id = $_POST["cate_id"];
        $foods = getFoodsByCateId($cate_id);
    }else {
        $foods = getFoodsByCateId();
    }
}else {
    $foods = getFoodsByCateId();
}
require "./views/customer/trending/trending.view.php";