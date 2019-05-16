<?php

/**
 * 项目入口文件
 * @Author: barry
 * @Date:   2019-05-09 20:10:41
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 18:01:49
 */

//进入自定义首页
define("APP_ROOT_PATH", __DIR__ . DIRECTORY_SEPARATOR);
define("DEBUG", true);


include_once APP_ROOT_PATH . 'Library' . DIRECTORY_SEPARATOR . 'Autoload.php';
include_once APP_ROOT_PATH . 'Tools' . DIRECTORY_SEPARATOR . 'function.php';
include_once APP_ROOT_PATH . 'Config' . DIRECTORY_SEPARATOR . 'config.php';


Library_Base::run();


