<!DOCTYPE html>
<html>
<head>
	<title>HG6686全讯网</title>
	<meta charset="gbk">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link href="images/favicon_frontend.ico" rel="shortcut icon">
    <link href="images/favicon_frontend.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/fixed-ad.css">
    <link rel="stylesheet" type="text/css" href="css/liMarquee.css">
    <link rel="stylesheet" type="text/css" href="css/innerpage.css">	
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
</head>
<body>
<!-- 头部 -->
<?php  include "testweb/header.php"	?>
	<div class="grid section3 " id="context1">
		<div class="ui container section3">
		<div class="ui top attached tabular menu secondary" id="mytabmenu">
		  <a class="item" href="index.php" ><span></span></a>
		  <a class="item" href="new-second.php"><span></span></a>
		  <a class="item" href="new-third.php"><span></span></a>
		  <a class="item" href="new-fourth.php"><span></span></a>
		  <a class="active item" href="new-five.php"><span></span></a>
		  <a class="item" href="new-sixth.php"><span></span></a>
		</div>
	</div>
	<div class="grid section4">
		<div class="ui container section3" id="inner-section">	
		    <?php include "testweb/fixed-ad.php" ?>
			<?php include "testweb/same-tab.php" ?>	
			<?php include "testweb/same-img.php" ?>
			<div class="ui tab segment bg-inner yxjiqiao" id="fifth" style="display:block;"> 
		        <div id="threeOther"></div>  	    
		        <div id="datazhentidianzong"></div>
		      	<div class="ui column hyzixun-end"><img src="images/hyzixun-end.jpg"></div>
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
<script type="text/javascript" src="js/swiper.min.js"></script>
<script type="text/javascript">
    $(function(){
        var swiper = new Swiper('.swiper-container', {
            autoplay:1000,
            speed:500,
            autoplayDisableOnInteraction : false,
            loop:true,
            centeredSlides : true,
            slidesPerView:1,
            pagination : '.swiper-pagination',
            paginationClickable:true,
            onInit:function(swiper){
                swiper.slides[2].className="swiper-slide swiper-slide-active";//第一次打开不要动画
            },
            breakpoints: {
                668: {
                    slidesPerView: 1,
                }
            }
        });
    })
</script>
</html>