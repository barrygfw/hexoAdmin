<?php

/**
 * @Author: gongfangwei
 * @Date:   2019-05-16 13:50:46
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 16:32:48
 */
class Library_Router
{
	private $action;
	public function __construct() {
		$url = $_SERVER['REQUEST_URI'];
		if (!empty($url) && $url != '/') {
			$url = str_replace('/', '_', trim($url, '/'));
			$this->action = $url;
		} else {
			$this->action = 'Index';
		}
		new $this->action;
	}
}