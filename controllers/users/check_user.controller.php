<?php
require "./models/users.model.php";
if (count(getAdmin()) == 0) {
    header("Location: /admin/signup");
    die();
}else if (parse_url($_SERVER['REQUEST_URI'])['path'] == '/') {
    $uri = "/foodpanda";
}