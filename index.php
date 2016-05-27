<?php
/**
 * Created by PhpStorm.
 * Author:michael
 * Date: 2015/5/29
 * Time: 18:57
 */
define('BASEDIR',__DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

$stack = new SplStack();
$stack->push("data1\n");
$stack->push("data2\n");

echo $stack->pop();
echo $stack->pop();

