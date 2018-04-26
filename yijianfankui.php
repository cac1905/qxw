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
    <style type="text/css">
    	.yijian {
    		background-color: #f2f2f2;

    	}
    	.yijian p,.yijian p a {
    		color: #999;
    	}
    	.yijian.container {
    		padding: 2em 1em;
    	}
    	.yijian.container h1
    	{
    		font-size: 26px;
    		font-weight: 500;
    	}
    	.yijian.container p.fankui
    	{
    		color: #333;
    		font-size: 15px;
    	}
    	.miaoshu
    	{
    		font-size: 14px;
    		color: #000;
    	}
    	.miaoshu span {
    		font-size: 12px;
    		color: #3e3e3e;
    	}
    	.ui.form .field.one textarea {
    		width: 60%;
    		height: 191px;
    		margin-left: 5%;
    		resize: none;
    	}
    	.ui.form .field.two textarea {
    		width: 60%;
    		height: 122px;
    		margin-left: 5%;
    		resize: none;    		
    	}
    	.ui.form .field.two {
    		position: relative;
    	}
    	.ui.form .field.two label {
    		position: absolute;
    		left: 6.5%;
    		top: 13px;
    		color: #333;
    	}
    	.ui.form .field.two span {
    		position: absolute;
    		right: 0;
    		left: 60%;
    		top: 12px;
    	}
    	.ui.form .field.two div{
    		position: absolute;
    		top: 46px;
    		left: 6.5%;
    		border: 1px solid #ccc;
    	}

    	.ui.form .field.two span s{
    		text-decoration: none;
    	}
    	.ui.form .field.two span i{
    		text-decoration: none;
    	}
    	.ui.form .field>label{
    		font-size: 14px;
    	}
    	div.btn {
    		margin-top: 3em;
    		margin-left: 3.8em;
    		font-weight: 500;
    	}
    	.ui.form .field>label{
    		margin-bottom: 10px;
    	}
    	div.btn  button
    	{
    		width: 104px;
    		height: 30px;
    		padding: 0!important;

    	}
    	.ui.button {
    		border:1px solid #ccc;
    		margin-right: 28px;
    	}
    	.ui.secondary.button
    	{
    		background-color: #3e3e3e;
    	}

    	.field.two input[type=file]
    	{
    		font-size: 12px;
		    width: 58px;
		    height: 58px;
		    padding: 0;
		    border-radius: 0;
		    font-size: 0;
		    padding: 0;
		    opacity: 0;
	-ms-filter: 'alpha(opacity=0)';
    	}
    	.ui.form .field.two .yi{
    		width: 62%;
		    height: 1px;
		    display: inline-block;
		    background-color: #ccc;
		    left: 19%;
		    top: 46%;
    	}
    	.ui.form  .field.two  .er{
    		width: 1px;
		    height: 62%;
		    display: inline-block;
		    background-color: #ccc;
		    left: 49%;
		    top: 19%;
    	}
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

	<div class="ui container yijian">
		<p>当前位置： <a href="#">首页</a> > <a href="#">意见反馈</a> </p>
		<h1 class="ui header"> 意见反馈</h1>
		<p class="fankui">(欢迎您提出对本站的意见和建议，这将帮助我们为您提供更好的服务)</p>
		<div class="ui divider"></div>

		<div class="ui form">
		  <div class="field one">
		    <label class="miaoshu">问题描述： <span>(请尽量用简洁清晰的语句描述出您的问题，以方便我们核实)</span></label>
		    <textarea></textarea>
		  </div>
		  <div class="field two">
		    <label>图片(选填，提供问题截图)</label>
		    <span><s>0</s>/<i>4</i></span>
		    <textarea rows="2"></textarea>
		    <div>
		    	<input type="file" name="">
		    	<span class="yi"></span>
		    	<span class="er"></span>
		    </div>
		    
		  </div>
		</div>

		<div class="btn">
			<button class="ui  button">重置</button>
			<button class="ui secondary button">提交</button>
		</div>

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