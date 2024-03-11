<?php
// unset session variable
unset($_SESSION["is_delivery_email"]);
unset($_SESSION["is_delivery_password"]);
$delivery = getAllUsers(3);

require "./views/delivery/home/home.view.php";