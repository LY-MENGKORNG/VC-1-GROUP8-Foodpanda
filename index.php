<?php
require 'utils/url.php';

if (urlIs("/")) {
    require "routers/admin.router.php";
}else if (urlIs("/ad-admin")) {
    require "routers/admin.router.php";
}else if (urlIs("/admin")) {
    require "./layouts/admin/header.php";
    require "./layouts/admin/navbar.php";
    require "./views/admin/admin.view.php";
    require "./layouts/admin/footer.php";
}