<?php
session_start();

require "./models/users.model.php";
if (count(getUser("Admin")) == 0 && !isset($_SESSION['admin'])) {
    header("Location: /admin/signup");
    die();

}else if (parse_url($_SERVER["REQUEST_URI"])['path'] == "/customer" && isset($_SESSION['customer'])) {
    $uri = "/customer";
}
else if (parse_url($_SERVER['REQUEST_URI'])['path'] == '/') {
    $uri = "/foodpanda";
}