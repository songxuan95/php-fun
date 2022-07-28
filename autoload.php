<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2022/7/28
 * Time: 18:02
 */

function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . '/src/' . $path . '.php';

    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('classLoader');