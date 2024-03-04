<?php
require 'utils/url.php';
require 'database/database.php';
require "./models/users.model.php";

// Admin routes
if (urlIs("/admin") || urlIs("/admin/manage_restaurant") || 
    urlIs("/admin/add_restaurant") || urlIs("/admin/check_add_restaurant") ||
    urlIs("/admin/restaurant_owner") || urlIs("/admin/check_add_restaurant_owner") ||
    urlIs("/admin/restaurant_detail") || urlIs("/admin/edit_restaurant") ||
    urlIs("/admin/profile")) 
{ 
    require "routers/admin_router.php";
}

// Restaurant routes
else if (urlIs("/restaurant") || urlIs("/restaurant/category") ||
        urlIs("/restaurant/delivery") || urlIs("/restaurant/customer") ||
        urlIs("/restaurant/food") ||urlIs("restaurant/category") || urlIs("/restaurant/profile")) 
{
    require "./routers/resturant_router.php";
}

// Customer routes
else if(urlIs("/customer") || urlIs("/customer/checkout") || 
        urlIs("/customer/search") || urlIs("/customer/offers") ||
        urlIs("/customer/profile") || urlIs("/customer/order")) 
{  
    require './routers/customer_router.php';
}

// Authentication routes
else if (
    urlIs("/") || urlIs("/admin/signup") || urlIs("/admin/signin") || 
    urlIs("/admin/check-signin") || urlIs("/admin/check-signup") ||
    urlIs("/admin/signout") || urlIs("/admin/check-signout") ||
    
    urlIs("/customer/check-signup") || urlIs("/customer/signin") || 
    urlIs("/customer/check-signin") || urlIs("/customer/signout") || 
    urlIs("/customer/check-signout") || urlIs("/foodpanda")  ||

    urlIs("/restaurant/signin") || urlIs("/restaurant/check_signin") ||
    urlIs("/restaurant/signout") || urlIs("/restaurant/check_signout")) 
{
    require "./routers/authentication_router.php";
}   