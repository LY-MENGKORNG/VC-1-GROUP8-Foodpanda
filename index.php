<?php
require 'utils/url.php';
require 'database/database.php';
require "./models/users.model.php";

// Admin routes
if (urlIs("/admin") || urlIs("/admin/manage_restaurant") || 
    urlIs("/admin/add_restaurant") || urlIs("/admin/check_add_restaurant") ||
    urlIs("/admin/restaurant_owner") || urlIs("/admin/check_add_restaurant_owner") ||
    urlIs("/admin/restaurant_detail") || urlIs("/admin/edit_restaurant") ||
    urlIs("/admin/profile") || urlIs("/admin/edit_profile")) 
{ 
    require "routers/admin_router.php";
}

// Restaurant routes
else if (urlIs("/restaurant") || urlIs("/restaurant/category") ||
        urlIs("/restaurant/delivery") || urlIs("/restaurant/customer") ||
        urlIs("/restaurant/food") || urlIs("/restaurant/add_food") || urlIs("/restaurant/category") || 
        urlIs("/restaurant/add_category") || urlIs("/restaurant/profile") || 
        urlIs("/restaurant/edit_profile") || urlIs("/restaurant/add_delivery")) 
{
    require "./routers/resturant_router.php";
}

// Delivery routes
else if(urlIs("/delivery") || urlIs("/delivery/profile") || urlIs("/delivery/edit_profile") ||
        urlIs("/delivery/notification") || urlIs("/delivery/dashboard") || urlIs("/delivery/shipping")) 
{
    require "./routers/delivery_router.php";
}

// Customer routes
else if(urlIs("/customer") || urlIs("/customer/checkout") || 
        urlIs("/customer/search") || urlIs("/customer/offers") ||
        urlIs("/customer/profile") || urlIs("/customer/order") ||
        urlIs("/customer/edit_profile") || urlIs("/customer/trending")) 
{  
    require './routers/customer_router.php';
}

// Authentication routes
else if (
    urlIs("/") || urlIs("/admin/signup") || urlIs("/admin/signin") || 
    urlIs("/admin/check_signin") || urlIs("/admin/check_signup") ||
    urlIs("/admin/signout") || urlIs("/admin/check_signout") ||
    
    urlIs("/customer/check_signup") || urlIs("/customer/signin") || 
    urlIs("/customer/check_signin") || urlIs("/customer/signout") || 
    urlIs("/customer/check_signout") || urlIs("/foodpanda")  ||

    urlIs("/restaurant/signin") || urlIs("/restaurant/check_signin") ||
    urlIs("/restaurant/signout") || urlIs("/restaurant/check_signout") || 

    urlIs("/delivery/signin") || urlIs("/delivery/check_signin") || 
    urlIs("/delivery/signout") || urlIs("/delivery/check_signout")) 
{
    require "./routers/authentication_router.php";
}   