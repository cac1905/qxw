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
    <!-- <link rel="stylesheet" type="text/css" href="css/menu.min.css"> -->
    <style type="text/css">
    .ui.sousuojieguo .ui.line-words  {
        padding-bottom: 0.3em;
        border-bottom: 4px solid #333;
        margin-left: 1em;
        margin-right: 1em;
    }
    .ui.container.sousuojieguo
    {
      padding: 1.3em 0em 1.65em 0;
      background-color: #f2f2f2;
    }
    .ui.container.sousuojieguo  .ui.line-words a.bo
    {
      color: #ff0000;
    }
    .sousuojieguo .yulecheng {
      padding: 2em 1em;
    }
    #zixun-youhui {
      margin: 0 1em;
    }
    #zixun-youhui > a.item
    {
      width: 164px;
      height: 42px;
      text-align: center;
      padding: 0 4.8em;
      /*font-size: 14px!important;*/
    }
    #zixun-youhui > a.item.active
    {
      background-color: #333;
      color: #fff;
    }
    .sousuojieguo .ui.pagination.menu
    {
      padding-left: 1em;
    }
    #zixun-youhui-list {
      margin-left: 1em;
      margin-right: 1em;
      border: 1px solid #ccc;
      margin-top: 1em;
      padding-left: 1em;
      padding-top: 1em;
      padding-right: 1em;
    }
    #zixun-youhui-list .item  .image{
      padding: 0.5em;
      background-color: #fff;
      height: 104px;
      width: 133px!important;
      border: 1px solid #ccc;
    }
    #zixun-youhui-list .item  .content
    {
      padding-top: 0.5em;
      padding-left: 1.6em;
    }
    #zixun-youhui-list .item  .content a {
      font-size: 20px;
      font-weight: bold;
    }
    #zixun-youhui-list .item{
      height: 123px;
      border-bottom: 1px solid #ccc;
    }
    #zixun-youhui-list .item:last-child{
      border: 0;
    }
    .ui.pagination.menu1 .active.item{
      background-color: #13815d;
    }
    .ui.container.sousuojieguo > .ui.breadcrumb {
        width: 100%;
    }
    .ui.container.sousuojieguo > .ui.breadcrumb  .jieguo {
      float: right;
      margin-right: 0.5em;
    }
    .ui.container.sousuojieguo > .ui .jieguo span{
      font-weight: 700;
    }
    </style>
</head>
<body>

<div class="grid section3 "  id="context1">
	<div class="ui container section3">
		<div class="ui top attached tabular menu  secondary">
		  <a class="active item" data-tab="first"><span>首页</span></a>
			<a class="item" data-tab="second"><span>娱乐城</span></a>
			<a class="item" data-tab="third"><span>优惠活动</span></a>
			<a class="item" data-tab="fourth"><span>行业资讯</span></a>
			<a class="item" data-tab="fifth"><span>游戏技巧</span></a>
			<a class="item" data-tab="sixth"><span>招商认证</span></a>
		</div>
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
$('.twelve.wide.stretched.column .ui.segment').eq(1).show().siblings().hide();
$('.gunyu-us-menu a.item').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
    $('.twelve.wide.stretched.column .ui.segment').eq($(this).index()).show().scrollTop(0).siblings().hide();
})
</script>
</html>