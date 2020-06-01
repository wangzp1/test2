<?php
 
	error_reporting(1);
 
	$target = '/data1/www/htdocs/githubtest.com/test2/'; // 生产环境web目录
	$token = '123456';
	$wwwUser = 'www';
 
	$json = json_decode(file_get_contents('php://input'), true);
 
	if (empty($json['token']) || $json['token'] !== $token) {
	   // exit('error request');
	   echo "error";
	}
	
	$cmd = "cd $target && git pull";
	
	shell_exec($cmd);
?>
