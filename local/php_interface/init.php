<?php

$arLibs = [
    $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/defines.php',
    $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/events.php',
];

foreach ($arLibs as $lib) {
    if (file_exists($lib)) {
        require_once($lib);
    }
}
