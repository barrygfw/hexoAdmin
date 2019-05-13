<?php

/**
 * @Author: barry
 * @Date:   2019-05-09 20:24:30
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-12 12:45:21
 */
include_once __DIR__ . '..' . DIRECTORY_SEPARATOR . 'library' . DIRECTORY_SEPARATOR . 'base.php';
abstract class Control_Controller 
{
	public function __construct()
	{
		$this->action();
	}

	public abstract function action()
	{

	}
}