<?php
require 'utils/url.php';
require 'database/database.php';

// Authentication routes
if (
    urlIs("/") || urlIs("/admin/signup") || urlIs("/admin/signin") || 
    urlIs("/admin/check-signin") || urlIs("/admin/check-signup") ||
    urlIs("/admin/signout") || urlIs("/admin/check-signout") ||
    
    urlIs("/customer/check-signup") || urlIs("/customer/signin") || 
    urlIs("/customer/check-signin") || urlIs("/customer/signout") || 
    urlIs("/customer/check-signout") || urlIs("/foodpanda")
    ) 
{
    require "./routers/authentication_router.php";
}

// Admin routes
else if (urlIs("/admin")) { 
    require "routers/admin_router.php";
}

// Restaurant routes
else if (urlIs("/restaurant") || urlIs("/restaurant-signup") || urlIs("/restaurant-signin")) {
    require "./routers/resturant_router.php";
}

// Customer routes
else if (urlIs("/customer")){  
    require './routers/customer_router.php';
}