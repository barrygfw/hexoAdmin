<?php
//自动加载类
/**
 * @Author: barry
 * @Date:   2019-05-09 20:28:03
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 16:56:44
 */
/**
 * 自动加载类
 * @param  [type] $className 格式类名
 * @param  string $suffix    [文件后缀.php]
 * @return [type]            boolean
 */
function autoload($className, $suffix = ".php")
{
	//a_b_c  => A/B/C
	$classPath = implode(DIRECTORY_SEPARATOR, array_map(function($name){
		return ucfirst($name);
	}, explode('_', $className)));

	$filePath = APP_ROOT_PATH . $classPath . $suffix;
	if (!class_exists($className) && file_exists($filePath)) {
		include $filePath;
		return true;
	}

	$filePath = APP_ROOT_PATH . 'Control' . DIRECTORY_SEPARATOR . $classPath . $suffix;
	if (!class_exists($className) && file_exists($filePath)) {
		include $filePath;
		return true;
	}
	return false;
}

spl_autoload_register("autoload");