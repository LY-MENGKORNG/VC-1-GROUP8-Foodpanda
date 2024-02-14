<?php
require 'utils/url.php';
require 'database/database.php';

if (urlIs("/admin")) { 
    require "routers/admin.router.php";
} else if (urlIs('/signin') || urlIs('/signup')) {
    require "routers/customer_authen.router.php";
}else{
    require 'routers/customer.router.php';
}
