<?php
require 'utils/url.php';

if (urlIs("/")) {
    require "routers/admin.router.php";
    require "routers/restaurant.router.php";
}
if (urlIs("/restaurant-signup")) {
    require "views/signup/restaurant_signup.view.php";
   
}

else if (urlIs("/ad-admin")) {
    require "routers/admin.router.php";
}else if (urlIs("/res-restaurant")) {
    require "routers/restaurant.router.php";
}else if (urlIs("/admin") ) {
    require "./layouts/admin/header.php";
    require "./layouts/admin/navbar.php";
    require "./views/admin/admin.view.php";
    require "./layouts/admin/footer.php";
}else if(urlIs("/restaurant")){
    require "./layouts/admin/header.php";
    require "./layouts/admin/navbar.php";
    require "./views/restaurant/restaurant.view.php";
    require "./layouts/admin/footer.php";

}