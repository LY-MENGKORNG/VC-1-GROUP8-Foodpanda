<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty(($_POST["cate_name"])) && !empty($_POST["description"])) {
        $cate_name = $_POST["cate_name"];
        $description = $_POST["description"];

        editCategory(intval($item_id), $cate_name, $description);
        header("Location: /restaurant/category");
    }
}
