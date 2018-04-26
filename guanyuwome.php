<!DOCTYPE html>
<html>
<head>
	<title>主页面</title>
	<meta charset="utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link href="images/favicon_frontend.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/menu.min.css">
    <style type="text/css">

    </style>
</head>
<body>
	<?php 
	include "header.php"
	?>
<div class="grid section3 "  id="context1">
	<div class="ui container section3">
		<div class="ui top attached tabular menu  secondary">
			<!-- <div class="ui pointing secondary menu"> -->
		    <a class="active item" data-tab="first"><span>首页</span></a>
			<a class="item" data-tab="second"><span>娱乐城</span></a>
			<a class="item" data-tab="third"><span>优惠活动</span></a>
			<a class="item" data-tab="fourth"><span>行业资讯</span></a>
			<a class="item" data-tab="fifth"><span>游戏技巧</span></a>
			<a class="item" data-tab="sixth"><span>招商认证</span></a>
		</div>
	</div>
<div class="grid section4">
	<div class="ui container section3">	

	<?php 
		include "same-tab.php"
	?>	

	<?php 
		include "same-img.php"
	?>	


</div>
</div>




</html>