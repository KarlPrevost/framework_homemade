<?php
spl_autoload_register(function ($class_name) {
    $path = str_replace('\\', '/', $class_name);
    if (strpos($class_name, "Core") !== false) {
        require_once("$path.php");
    } else if (strpos($class_name, "Controller") !== false) {
        require_once("src/$path.php");
    } else if (strpos($class_name, "Model") !== false) {
        require_once("src/$path.php");
    } else if (strpos($class_name, "View") !== false) {
        require_once("src/$path.php");
    } else {
        require_once("$path.php");
    }

});