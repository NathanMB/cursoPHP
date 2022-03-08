<?php

spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/nome da pasta/';

    $file = $baseDir . str_replace('\\', '/', $class) . 'php';

    if (file_exists($file)) {
        require $file;
    }
});
