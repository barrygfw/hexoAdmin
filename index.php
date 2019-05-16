<?php

/**
 * @Author: barry
 * @Date:   2019-05-09 20:10:41
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 11:34:49
 */

//进入自定义首页
define("APP_ROOT_PATH", __DIR__ . DIRECTORY_SEPARATOR);
define("DEBUG", true);


include_once APP_ROOT_PATH . 'Library' . DIRECTORY_SEPARATOR . 'Autoload.php';
include_once APP_ROOT_PATH . 'Tools' . DIRECTORY_SEPARATOR . 'function.php';


if (DEBUG === true) {
	ini_set('display_error', 'On');
} else {
	ini_set('display_error', 'Off');
}

Library_Base::run();


