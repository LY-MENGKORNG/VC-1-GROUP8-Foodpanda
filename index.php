<?php
require 'utils/url.php';

if (urlIs("/") || urlIs("/ad-admin")) {
    require "routers/admin.router.php";
}else if (urlIs("/admin")) {
    require "routers/admin.router.php";
}