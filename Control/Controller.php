<?php
/**
 * @Author: barry
 * @Date:   2019-05-09 20:24:30
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 16:31:54
 */

abstract class Controller 
{
	public function __construct()
	{
		$this->action();
	}

	public abstract function action();
}