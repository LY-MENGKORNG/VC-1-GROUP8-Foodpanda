<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(($_POST["cate_id"]))) {
        $cate_id = $_POST["cate_id"];
        $foods = getFoodsById($cate_id);
    }else {
        $foods = getFoodsById();
    }
}
require "./views/customer/trending/trending.view.php";