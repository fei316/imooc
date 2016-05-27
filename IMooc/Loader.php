<?php
/**
 * Created by PhpStorm.
 * Author:michael
 * Date: 2015/5/29
 * Time: 19:02
 */
namespace IMooc;
class Loader{
    static function autoload($class){
        include BASEDIR.'/'.str_replace('\\','/',$class).'.php';
    }
}