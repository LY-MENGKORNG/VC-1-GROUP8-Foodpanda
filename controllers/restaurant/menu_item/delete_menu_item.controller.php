<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = $_POST["item_id"];
    deleteCategory($id);
    header("Location: /restaurant/category");
    
}