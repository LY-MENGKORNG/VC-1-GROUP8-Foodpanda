<?php
// unset session variable
unset($_SESSION["is_owner_email"]);
unset($_SESSION["is_owner_password"]);

require "./views/restaurant/home/home.view.php";