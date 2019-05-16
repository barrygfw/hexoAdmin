<?php

/**
 * @Author: gongfangwei
 * @Date:   2019-05-16 17:44:27
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 17:58:20
 */
class Model_User
{
	private $user_name;
	private $password;

	public function __construct() {
		$this->user_name = "barry";
		$this->password = "123456";
	}

	public function getUserInfo() {
		return [
			'user_name' => $this->user_name,
			'password' => $this->password
		];
	}
}