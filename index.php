<?php
require 'utils/url.php';

if (urlIs("/")) {
    require "controllers/check_user.controller.php";
}