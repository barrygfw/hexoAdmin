<?php
/**
 * 控制器基类
 * @Author: barry
 * @Date:   2019-05-09 20:24:30
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 18:03:15
 */

abstract class Controller 
{
	public function __construct()
	{
		$this->action();
	}

	public abstract function action();
}