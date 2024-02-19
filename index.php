<?php
require 'utils/url.php';
require 'database/database.php';
if (urlIs("/admin")) { 
    require "routers/admin_router.php";

}else if (urlIs("/restaurant") ) {
    require "./routers/restaurant_router.php";

}else if (urlIs("/admin/signup") || urlIs("/admin/signin") || 
    urlIs("/admin/check-signin") || urlIs("/admin/check-signup") ||
    urlIs("/admin/signout") || urlIs("/admin/check-signout")||
    urlIs("/restaurant/signup") || urlIs("/restaurant/signin")||
    urlIs("/restaurant/check-signin") || urlIs("/restaurant/check-signup")||
    urlIs("/restaurant/signout") || urlIs("/restaurant/check-signout")) {
    require "./routers/authentication_router.php";

}else{  
    require './routers/customer_router.php';
}