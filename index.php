<?php
require 'utils/url.php';

if (urlIs("/admin")) { 
    require "routers/admin.router.php";
} else if (urlIs('/signin') || urlIs('/signup')) {
    require "authentication_router.php";
}else{
    require 'router.php';
}