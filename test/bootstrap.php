<?php
// Use this bootstrap file if you run the unit tests within a Magento installation
define('CLASS_DIR', realpath(__DIR__ . '/../src/lib/'));
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register(function($className)
{
    $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $className) . '.php';
    if (stream_resolve_include_path($fileName)) {
        include $fileName;
        return true;
    }
    return false;
}
);