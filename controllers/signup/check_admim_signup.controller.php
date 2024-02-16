<?php
require "models/admin.model.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (count(getAdmin()) == 0) {
        if (!empty($_POST["f-name"]) && !empty($_POST["l-name"]) && !empty($_POST["phone"]) &&
            !empty($_POST["email"]) && !empty($_POST["password"])) {
            
            $name = secureData($_POST["f-name"] . " " . $_POST["l-name"]);
            $email = secureData($_POST["email"]);
            $password = secureData($_POST["password"]);
            $phone = secureData($_POST["phone"]);

            createAdmin($name, $email, $password, $phone);

            header("Location: /admin-signin");
        }
    }
}

?>