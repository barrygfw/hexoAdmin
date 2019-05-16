<?php

/**
 * @Author: gongfangwei
 * @Date:   2019-05-16 11:06:50
 * @Last Modified by:   gongfangwei
 * @Last Modified time: 2019-05-16 11:08:23
 */
function dump($content) {
	if (is_array($content)) {
		echo "<pre>";
		print_r($content);
		echo "</pre>";
	} else {
		var_dump($content);
	}
}