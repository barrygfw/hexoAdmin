<?php
/**
 * @Author: gongfangwei
 * @Date:   2019-05-12 12:44:07
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 20:10:08
 */
class Login_Login extends Controller
{
	public function action(){
		$shell = "cd /var/www/nginx/ascoder && hexo clean && hexo g && hexo d";
		$res = system($shell);
		dump($res);
	}
}