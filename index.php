<?php
require 'utils/url.php';
if (urlIs('/admin')) {
    require 'routers/admin.router.php';
}