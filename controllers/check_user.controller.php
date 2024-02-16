<?php 
require "./models/users.model.php";

if (count(checkUser("Admin")) == 0) {
    require "./routers/admin.router.php";
    header("Location: /admin-signup");
}else if (count(checkUser("restaurants")) == 0) {
    require "views/restaurant/restaurant.view.php";
}
?>
