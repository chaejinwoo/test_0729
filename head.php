

<?php

   session_start();


require_once ($_SERVER["DOCUMENT_ROOT"]. "/site_information.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta http-equiv="Cache-Control" content="no-cache"/>
	<meta http-equiv="Expires" content="0"/>
	<meta http-equiv="Pragma" content="no-cache"/> -->
	<link rel="shortcut icon" href="/img/medic_par.ico">
	<link rel="apple-touch-icon" href="/img/medic_par.ico">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="blue"/>

	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimun-scale=1.0, user-scalable=yes, target-densitydpi=device-dpi">
	<meta name="format-detection" content="telephone=no, address=no, email=no" />
	<meta name="naver-site-verification" content=""/>
	<meta name="description" content="">
	<title>files Cjw</title>
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="/css/font_notosanskr.css"/>
	<link rel="stylesheet" type="text/css" href="/css/base.css"/>
	<link rel="stylesheet" type="text/css" href="/css/loaders.css"/>
	<link rel="stylesheet" type="text/css" href="/css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="/css/common.css"/>
	<link rel="stylesheet" type="text/css" href="/css/intro.css"/>


<!--script-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
	<script type="text/javascript" src="/js/createWaterBall-jquery.js"></script>
	<script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="/js/animate.js"></script>	
	<script type="text/javascript" src="/js/menu.js"></script>
<!--	<script type="text/javascript" src="/js/common.js"></script>-->
<!--	<script type="text/javascript" src="/slick/slick.min.js"></script>-->
	<script type="text/javascript" src="/smarteditor/js/HuskyEZCreator.js" charset="utf-8"></script>
</head>

<?
//define("DB_SERVER", "localhost");
//define("DB_USER", "root");
//define("DB_PASSWORD", "12345");
//define("DB_DATABASE", "ydong7777");
//$connect = mysqli_connect("localhost", "root", "123456", "ydong7777");
   
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "123456");
define("DB_DATABASE", "ydong7777");
$connect = mysqli_connect("localhost", "root", "123456", "ydong7777");

   ?>