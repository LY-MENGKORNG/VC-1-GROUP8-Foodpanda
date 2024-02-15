<?php
require 'utils/url.php';
require 'database/database.php';
require 'models/get_login.model.php';

if (urlIs("/")) {
    $is_signup = !getAdminLogin();
    require 'admin-signup';
}

if (urlIs(('/admin-signup'))) {
    require "routers/admin_signup.router.php";
}
else if (urlIs("/admin")) { 
    require "routers/admin.router.php";
}
    