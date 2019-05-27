<?php
/**
 * @Author: barry
 * @Date:   2019-05-09 20:18:12
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-27 19:37:23
 */
class Library_Base
{
	public static function run() {
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