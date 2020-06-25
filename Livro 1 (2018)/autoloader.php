<?php

spl_autoload_register(function ($className) {
    $filePath = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    require_once($filePath . '.php');
});