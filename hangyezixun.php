<!DOCTYPE html>
<html>
<head>
	<title>主页面</title>
	<meta charset="utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link href="images/favicon_frontend.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
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

		<div class="ui tab segment active bg-inner" data-tab="first">	
			<?php 
				include "first.php"
			?>
		</div>

		<div class="ui tab segment bg-inner" data-tab="second">
			<?php 
				include "second.php"
			?>
		  <div class="ui top attached tabular menu">
		    <a class="item" data-tab="second/a">2A</a>
		    <a class="item" data-tab="second/b">2B</a>
		    <a class="item active" data-tab="second/c">2C</a>
		    <a class="item" data-tab="second/d">2A</a>
		    <a class="item" data-tab="second/e">2B</a>
		    <a class="item active" data-tab="second/f">2C</a>
		  </div>
		  <div class="ui bottom attached tab segment" data-tab="second/a">2A</div> 
		  <div class="ui bottom attached tab segment active" data-tab="second/b">2B</div>
		  <div class="ui bottom attached tab segment" data-tab="second/c">2c</div>
		  <div class="ui bottom attached tab segment" data-tab="second/d">2d</div>
		  <div class="ui bottom attached tab segment" data-tab="second/e">2e</div>
		  <div class="ui bottom attached tab segment" data-tab="second/f">2f</div>
		</div>

		<div class="ui tab segment bg-inner" data-tab="third">
		  <div class="ui top attached tabular menu">
		    <a class="item" data-tab="third/a">3A</a>
		    <a class="item" data-tab="third/b">3B</a>
		    <a class="item active" data-tab="third/c">3C</a>
		    <a class="item" data-tab="third/d">3d</a>
		    <a class="item" data-tab="third/e">3e</a>
		    <a class="item" data-tab="third/f">3f</a>
		  </div>
		  <div class="ui bottom attached tab segment" data-tab="third/a">3A</div>
		  <div class="ui bottom attached tab segment" data-tab="third/b">3B</div>
		  <div class="ui bottom attached tab segment active" data-tab="third/c">3C</div>
		  <div class="ui bottom attached tab segment" data-tab="third/d">3d</div>
		  <div class="ui bottom attached tab segment" data-tab="third/e">3e</div>
		  <div class="ui bottom attached tab segment" data-tab="third/f">3f</div>
		</div>

		<div class="ui tab segment bg-inner" data-tab="fourth">
		  <div class="ui top attached tabular menu">
		    <a class="item" data-tab="fourth/a">4A</a>
		    <a class="item" data-tab="fourth/b">4B</a>
		    <a class="item" data-tab="fourth/c">4c</a>
		    <a class="item active" data-tab="fourth/d">4d</a>    
		    <a class="item" data-tab="fourth/e">4e</a>
		    <a class="item" data-tab="fourth/f">4f</a>
		  </div>
		  <div class="ui bottom attached tab segment" data-tab="fourth/a">4A</div>
		  <div class="ui bottom attached tab segment" data-tab="fourth/b">4B</div>  
		  <div class="ui bottom attached tab segment" data-tab="fourth/c">4c</div>
		  <div class="ui bottom attached tab segment active" data-tab="fourth/d">4d</div>
		  <div class="ui bottom attached tab segment" data-tab="fourth/e">4e</div>
		  <div class="ui bottom attached tab segment" data-tab="fourth/f">4f</div>
		</div>

		<div class="ui tab segment bg-inner" data-tab="fifth">
		  <!-- <div class="ui top attached tabular menu">
		    <a class="item active" data-tab="fifth/a">5A</a>
		    <a class="item" data-tab="fifth/b">5B</a>   
		    <a class="item" data-tab="fifth/c">5c</a>
		    <a class="item" data-tab="fifth/d">5d</a>
		    <a class="item" data-tab="fifth/e">5e</a>
		    <a class="item" data-tab="fifth/f">5f</a> 
		  </div>
		  <div class="ui bottom attached tab segment active" data-tab="fifth/a">5A</div>
		  <div class="ui bottom attached tab segment" data-tab="fifth/b">5B</div>  
		  <div class="ui bottom attached tab segment" data-tab="fifth/c">5c</div>
		  <div class="ui bottom attached tab segment" data-tab="fifth/d">5d</div>
		  <div class="ui bottom attached tab segment" data-tab="fifth/e">5e</div>
		  <div class="ui bottom attached tab segment" data-tab="fifth/f">5f</div> -->
		  <!-- <img src="images/renzheng.jpg"> -->
		</div>

		<div class="ui tab segment bg-inner six" data-tab="sixth">
			<img src="images/renzheng.png">
		    <!--  <div class="ui top attached tabular menu">
		       <a class="item" data-tab="sixth/a">6A</a>
		       <a class="item" data-tab="sixth/b">6B</a>    
		       <a class="item" data-tab="sixth/c">6c</a>
		       <a class="item" data-tab="sixth/d">6d</a>
		       <a class="item" data-tab="sixth/e">6e</a>
		       <a class="item active" data-tab="sixth/f">6f</a>
		     </div>
		     <div class="ui bottom attached tab segment" data-tab="sixth/a">6A</div>
		     <div class="ui bottom attached tab segment" data-tab="sixth/b">6B</div>    
		     <div class="ui bottom attached tab segment" data-tab="sixth/c">6c</div>
		     <div class="ui bottom attached tab segment" data-tab="sixth/d">6d</div>
		     <div class="ui bottom attached tab segment" data-tab="sixth/e">6e</div>
		     <div class="ui bottom attached tab segment active" data-tab="sixth/f">6f</div> -->
		</div>
</div>
</div>





<!-- 底部 -->
 <?php 
 include "footer.php"
 ?>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/semantic.min.js"></script>
<script type="text/javascript">
$('#context1 .menu .item')
  .tab({
    context: $('#context1')
  })
;
$('#context2 .menu .item')
  .tab({
    // special keyword works same as above
    context: 'parent'
  })
;
</script>
</html>