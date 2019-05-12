<?php
//自动加载类
/**
 * @Author: barry
 * @Date:   2019-05-09 20:28:03
 * @Last Modified by:   barry
 * @Last Modified time: 2019-05-12 11:38:45
 */
function autoload($className, $suffix = ".php")
{
	$classPath = str_replace('_', DIRECTORY_SEPARATOR, $className);
	$filePath = APP_ROOT_PATH . $classPath . $suffix;
	if (!class_exists($className) && file_exists($filePath)) {
		include $filePath;
		return true;
	}
}

spl_autoload_register("autoload");