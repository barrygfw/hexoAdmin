<?php
/**
 * @Author: gongfangwei
 * @Date:   2019-05-12 12:44:07
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 17:58:16
 */
class Login_Login extends Controller
{
	public function action(){
		$user = new Model_User();
		dump($user->getUserInfo());
	}
}