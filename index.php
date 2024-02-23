<?php
require 'utils/url.php';
require 'database/database.php';

// Admin routes
if (urlIs("/admin")) { 
    require "routers/admin_router.php";
}

// Restaurant routes
else if (urlIs("/restaurant") || urlIs("/restaurant-signup") || urlIs("/restaurant-signin")) {
    require "./routers/resturant_router.php";
}

// Customer routes
else if(urlIs("/customer") || urlIs("/customer/checkout") || 
        urlIs("/customer/search") || urlIs("/customer/offers") ||
        urlIs("/customer/profile") || urlIs("/customer/order")) {  
    require './routers/customer_router.php';
}

// Authentication routes
else if (
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