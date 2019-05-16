<?php
require_once __DIR__ . '/../Library/base.php';
/**
 * @Author: barry
 * @Date:   2019-05-09 20:24:30
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-13 22:23:32
 */

abstract class Control_Controller 
{
	public function __construct()
	{
		$this->action();
	}

	public abstract function action();
}