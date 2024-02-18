<?php
require "models/users.model.php";
if (count(checkUser("Admin")) > 0) {
    require "views/signin/admin_signin.view.php";
    // require "views/admin/admin.view.php";
}else {
    header("Location: /");
}
