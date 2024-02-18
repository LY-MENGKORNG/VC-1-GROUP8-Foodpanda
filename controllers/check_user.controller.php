<?php 
require "./models/users.model.php";
if (count(checkUser("Admin")) == 0) {
    require "views/signup/admin_signup_form.view.php";
}else if (count(checkUser("restaurants")) == 0) {
    echo "Please select one of the following users";
}
?>