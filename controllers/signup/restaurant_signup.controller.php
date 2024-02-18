<?php
require "models/restaurant.model.php";
// require "database/database.php";
echo $_POST["f-name"];

if (count(getAdmin()) == 0) {
    if (!empty($_POST["f-name"]) && !empty($_POST["l-name"]) && !empty($_POST["phone"]) &&
        !empty($_POST["email"]) && !empty($_POST["password"])) {
        
        createAdmin($_POST['f-name'] . " " . $_POST['l-name'], $_POST['email'], $_POST['password'], $_POST['phone']);
    }
}
header("Location: /restaurant");

?>