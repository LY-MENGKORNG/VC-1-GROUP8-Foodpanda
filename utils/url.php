<?php
function urlIs(string $value) { 
    return $_SERVER['REQUEST_URI'] === $value;
}
