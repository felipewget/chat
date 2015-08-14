<?php

	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
	header("Access-Control-Allow-Headers: *");
	
	session_start();
 	error_reporting(0);

	$url = explode('.', $_SERVER['HTTP_HOST']);
	$url = str_replace("http://", "", $url);
	$url = str_replace("https://", "", $url);

	if($url[0] != 'www')
	{
		header('Location: http://www.'.str_replace('www.', '', $_SERVER['HTTP_HOST']));
	}
	
	$absolute_path = 'http://studines.com/';
	$class;

	$arrPage = explode("/", $_GET['page']);
	
	if($_GET['page'] == ''){
		$_GET['page'] = 'home';
	}
	
	foreach($arrPage as $key => $value){
		
		if(trim($value) == ""){
			unset($arrPage[$key]);
		}
		
	}
	
	require_once 'controllers/routes.php';
	require_once 'helpers/Helper.class.php';
	
	$parametros = count($arrPage);
	
 	$page = $arrPage[0];
 	$param1 = $arrPage[1];
 	$param2 = $arrPage[2];
 	$param3 = $arrPage[3];
 	$param4 = $arrPage[4];
 	
 	if($page == ""){
 		$page = 'home';
 		$parametros = 1;
 	}
 	
 	$parametros--;
 	if($parametros == 0){
 		
 		$controller = $route[$page];
 		
 		if($controller != null){
	 		include_once 'controllers/'.$controller[0].".class.php";
	 		$class = new $controller[0];		
	 		$class->$controller[1]();

	 		die();

 		}
 		
 	} else if($parametros == 1) {
 		$controller = $route1[$page];
 		
 		if($controller != null){
	 		include_once 'controllers/'.$controller[0].".class.php";
	 		$class = new $controller[0];
	 		$class->$controller[1]($param1);

	 		die();

 		}
 		
 	} else if($parametros == 2) {
 		$controller = $route2[$page];
 		
 		if($controller != null){
	 		include_once 'controllers/'.$controller[0].".class.php";
	 		$class = new $controller[0];
	 		$class->$controller[1]($param1, $param2);

	 		die();

 		}
 		
 	} else if($parametros == 3) {
 		$controller = $route3[$page];
 		
 		if($controller != null){
	 		include_once 'controllers/'.$controller[0].".class.php";
	 		$class = new $controller[0];
	 		$class->$controller[1]($param1, $param2, $param3);

	 		die();

 		}
 		
 	} else if($parametros == 4) {
 		$controller = $route4[$page];
 		
 		if($controller != null){
	 		include_once 'controllers/'.$controller[0].".class.php";
	 		$class = new $controller[0];
	 		$class->$controller[1]($param1, $param2, $param3, $param4);

	 		die();

 		}
 		
 	}
 	
 	if($controller == null){
 		include 'view/pages/site/erro/page404.php';
 	}
 	
?>