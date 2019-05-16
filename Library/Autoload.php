<?php
//自动加载类
/**
 * @Author: barry
 * @Date:   2019-05-09 20:28:03
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 11:32:57
 */
function autoload($className, $suffix = ".php")
{
	$classPath = str_replace('_', DIRECTORY_SEPARATOR, $className);
	$filePath = APP_ROOT_PATH . $classPath . $suffix;
	echo $filePath;
	if (!class_exists($className) && file_exists($filePath)) {
		include $filePath;
		return true;
	}
}

spl_autoload_register("autoload");