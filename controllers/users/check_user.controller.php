<?php
require "./models/users.model.php";
if (count(getAdmin()) == 0) {
    header("Location: /admin/signup");
}