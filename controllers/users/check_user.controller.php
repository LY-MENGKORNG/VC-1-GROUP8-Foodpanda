<?php
require "./models/users.model.php";

if (count(getUser("Admin")) == 0 && !isset($_SESSION['admin'])) {
    header("Location: /admin/signup");
    die();
}else if(isset($_SESSION['admin']) && $uri == "/admin") {
    header("Location: /admin");
}

if (count(getUser("Admin")) == 0 || $uri == "/admin") {
    $uri = "/admin";
    die();
}
    
else if (parse_url($_SERVER['REQUEST_URI'])['path'] == '/') {
    $uri = "/foodpanda";
}
else if (isset($_SESSION['customer']) && $uri == "/customer") {
    $uri = "/customer";

}else if (!isset($_SESSION['customer'])){
    header("Location: /foodpanda");
}