<?php
require "./models/users.model.php";
var_dump($_SESSION["admin"]);
if (count(getUser("Admin")) == 0 || !isset($_SESSION['admin'])) {
    header("Location: /admin/signup");
    die();
}else if(isset($_SESSION['admin']) && $uri == "/admin") {
    header("Location: /admin");
}

else if (parse_url($_SERVER['REQUEST_URI'])['path'] == '/') {
    $uri = "/foodpanda";
}
else if (isset($_SESSION['customer']) && $uri == "/customer") {
    $uri = "/customer";

}else if (!isset($_SESSION['customer']) && !isset($_SESSION['admin'])){
    header("Location: /foodpanda");
}

