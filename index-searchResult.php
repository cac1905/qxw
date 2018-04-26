<!DOCTYPE html>
<html>
<head>
	<title>HG6686全讯网</title>
	<meta charset="gbk">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link href="images/favicon_frontend.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link href="images/favicon_frontend.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/fixed-ad.css">
    <link rel="stylesheet" type="text/css" href="css/liMarquee.css">
    <link rel="stylesheet" type="text/css" href="css/innerpage.css">
</head>
<body>
<!-- 头部 -->
<?php  include "testweb/header.php"	?>
	<div class="grid section3 " id="context1">
		<div class="ui container section3">
		<div class="ui top attached tabular menu secondary" id="mytabmenu">
		  <a class="active item" href="index.php" ><span></span></a>
		  <a class="item" href="new-second.php"><span></span></a>
		  <a class="item" href="new-third.php"><span></span></a>
		  <a class="item" href="new-fourth.php"><span></span></a>
		  <a class="item" href="new-five.php"><span></span></a>
		  <a class="item" href="new-sixth.php"><span></span></a>
		</div>
	</div>
	<div class="grid section4">
		<div class="ui container section3" id="inner-section">	
		    <?php include "testweb/fixed-ad.php" ?>
			<?php include "testweb/same-tab.php" ?>	
			<?php include "testweb/same-img.php" ?>
			<!-- 变化的东西 开始-->
			<div class="ui tab segment active bg-inner" >
			 	<?php include "searchResult.php"  ?>      
			</div>
			<!-- 变化的东西 结束-->
		</div>
</div>	
<!-- 底部 -->
 <?php  include "testweb/footer.php" ?>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/semantic.min.js"></script>
<script type="text/javascript" src="js/localdata.js"></script>
<script type="text/javascript" src="js/fixed-ad.js"></script>
<script type="text/javascript" src="js/jquery.liMarquee.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script>
    $(function () {

        //搜索结果页面资讯和优惠切换
        $('#zixun-youhui>a:first-child').addClass('active');
        $('#one>div:nth-child(5)').css('display','block')
        $('#one>div:nth-child(6)').css('display','none')

        $('#zixun-youhui a').click(function () {
            $(this).addClass('active').siblings().removeClass('active')
            console.log(111)
        })
        $('#zixun-youhui a:first-child').click(function () {
            $('#one>div:nth-child(5)').css('display','block')
            $('#one>div:nth-child(6)').css('display','none')
        })
        $('#zixun-youhui a:last-child').click(function () {
            $('#one>div:nth-child(5)').css('display','none')
            $('#one>div:nth-child(6)').css('display','block')

        })

    })
</script>
</html>