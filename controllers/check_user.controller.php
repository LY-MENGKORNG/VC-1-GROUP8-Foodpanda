<?php 
require "./models/users.model.php";
if (count(checkUser("Admin")) == 0) {
    require "views/signup/admin_signup_form.view.php";
}
?>