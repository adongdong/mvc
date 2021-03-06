<?php
/**
 *入口文件
 * 1、定义常量
 * 2、加载函数库
 * 3、启动框架
 */

define('IMOOC',realpath('./'));
define('CORE',IMOOC.'/core');
define('APP',IMOOC.'/app');
define('MODULE','app');

define('DEBUG',true);

if(DEBUG){
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}

include 'core/common/function.php';
include 'core/imooc.php';
//p(IMOOC);
spl_autoload_register('\core\imooc::load');

\core\imooc::run();