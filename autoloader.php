<?php
/**
 * Created by JetBrains PhpStorm.
 * User: shpits
 * Date: 24.10.13
 * Time: 14:19
 * To change this template use File | Settings | File Templates.
 */
spl_autoload_register('autoloadModel');
function autoloadModel($className)
{
    $filename = 'AnimalClass/'.$className.'.php';
    if (is_readable($filename)) {
        require $filename;
    }
   // include 'AnimalClass/'.$fileName;
}