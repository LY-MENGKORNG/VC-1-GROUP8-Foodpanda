<?php
require 'utils/url.php';
require 'database/database.php';
if (urlIs("/admin")) { 
    require "routers/admin_router.php";

}else if (urlIs("/restaurant") || urlIs("/restaurant-signup") || urlIs("/restaurant-signin")) {
    require "./routers/resturant_router.php";

}else if (urlIs("/admin/signup") || urlIs("/admin/signin") || 
    urlIs("/admin/check-signin") || urlIs("/admin/check-signup") ||
    urlIs("/admin/signout") || urlIs("/admin/check-signout")) {
    require "./routers/authentication_router.php";

}else{  
    require './routers/customer_router.php';
}