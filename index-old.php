<!DOCTYPE html>
<html>
<head>
	<title>主页面</title>
	<meta charset="utf-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
</head>
<body>
<!-- 定位部分 -->
<div class="ui fixed inverted menu header-pc">
	<div class="ui container header">
		<a href="#" class=" item  ">
			WWW.HG6868.COM
		</a>	
	<div class="right item">
		<a href="#" class="item ">
			收藏     
		</a>
		<a href="#" class=" item ">
			设置首页
		</a>
	</div>	
</div>		
</div>
<!-- logo和输入框部分 -->
<div class="grid section2">
	<div class="ui main text container container1">
		<div class="ui two column stackable grid">	
			<div class="column">
				<div class="ui segment">
					<img class="ui image left floated" src="images/qxw-pc-logo.png">
				</div>
			</div>
			<div class="column">
				<div class="ui segment search">
					<div class="ui action input right floated">
						<input type="text" placeholder="已收录1008家博彩平台与公司" name="">
						<button class="ui icon button">
							<i class="search icon"></i>
						</button>
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<!-- tab栏切换部分 -->
<div class="grid section3">
	<div class="ui container section3">
		<div class="ui top attached tabular menu">
		  	<a class="active item" data-tab="first"><span>首页</span></a>
			<a class="item" data-tab="second"><span>娱乐城</span></a>
			<a class="item" data-tab="third"><span>优惠活动</span></a>
			<a class="item" data-tab="four"><span>行业资讯</span></a>
			<a class="item" data-tab="five"><span>游戏技巧</span></a>
			<a class="item" data-tab="six"><span>招商认证</span></a>
		</div>
	</div>
</div>

<div class="ui tab segment active" data-tab="first">
  <div class="ui top attached tabular menu">
    <a class="item active" data-tab="first/a">1A</a>
    <a class="item" data-tab="first/b">1B</a>
    <a class="item" data-tab="first/c">1C</a>
  </div>

  <div class="ui bottom attached tab segment active" data-tab="first/a">1A</div>
  <div class="ui bottom attached tab segment" data-tab="first/b">1B</div>
  <div class="ui bottom attached tab segment" data-tab="first/c">1C</div>

  
</div>

<div class="ui tab segment" data-tab="second">
  <div class="ui top attached tabular menu">
    <a class="item" data-tab="second/a">2A</a>
    <a class="item" data-tab="second/b">2B</a>
    <a class="item active" data-tab="second/c">2C</a>
  </div>

  <div class="ui bottom attached tab segment" data-tab="second/a">2A</div>
  <div class="ui bottom attached tab segment" data-tab="second/b">2B</div>
  <div class="ui bottom attached tab segment active" data-tab="second/c">2C</div>
</div>
<div class="ui tab segment" data-tab="third">
  <div class="ui top attached tabular menu">
    <a class="item" data-tab="third/a">3A</a>
    <a class="item" data-tab="third/b">3B</a>
    <a class="item active" data-tab="third/c">3C</a>
  </div>
  <div class="ui bottom attached tab segment" data-tab="third/a">3A</div>
  <div class="ui bottom attached tab segment" data-tab="third/b">3B</div>
  <div class="ui bottom attached tab segment active" data-tab="third/c">3C</div>
</div>
<div class="grid section4">
	<div class="ui container section3">
		<div class="ui bottom attached active tab segment" data-tab="first">
			<?php 
				include "same-tab.php"
			 ?>
		    <!-- 首页部分开始 -->
		    <!-- 最新公告 -->
		    <!-- 公共部分开始 -->
	<!-- 		<div class="ui dividing header new">
				<div class="ui large header floated left">最新公告</div>
				<div class=" ui floated left header small">最近本站遭遇大量DNS劫持，各位球迷朋友请多注意，附DNS劫持解决方法！</div>
			    <span class="ui floated right header">> MORE</span>
			</div>  -->
			<!-- 公共部分结束 -->
			<!-- 切换 -->
					
		    <!-- 今日头条 -->
		    <div class="ui divider today">		    	
		    </div>
		    <div class="ui header toutiao">
		    	<span><i></i>今日头条</span>
		    	<s> > MORE </s>
		    </div>

			<div class="ui two column vertically padded grid toutiao stackable">
			  <div class="column">
			  	<div class="ui sizer vertical segment today">
				    <div class="ui huge header headcolor font-22">2017年凯发年度报告 全年交易数据达1971亿元</div>
				    <p>海博网铂金认证娱乐城凯发娱乐，2017年的年度报告已经发出。在2017年一整年总的交易数据是1971.82亿元，其中中国玩家达到了65.1%的用户量。在2017年凯发电子游戏的爆奖总数达到12.1亿元，最高的是最大一次湛蓝深海爆奖3亿多。</p>
				</div>
			    <div class="ui relaxed divided list today">
				  <div class="item">				    
				    <div class="content">
				    	<i></i>
				      	<a class="header">[优德]包赢技术在手，天下我有！输额100%返还</a>
				      	<span class="description">2017/12/02</span>
				    </div>
				  </div>
				  <div class="item">				   
				    <div class="content">
				    	<i></i>
				        <a class="header">[优德]体育串关投注100%返利,传说中的包赢技术</a>
				        <span class="description">2017/12/02</span>
				    </div>
				  </div>
				  <div class="item">				    
				    <div class="content">
				    	<i></i>
				        <a class="header">[鸿运国际]鸿运体育博彩0.6%反水</a>
				        <span class="description">2017/12/02</span>
				    </div>
				  </div>
				   <div class="item">				    
				    <div class="content">
				    	<i></i>
				        <a class="header">[必威]体育全城最高 1.0% 无上限日返水</a>
				        <span class="description">2017/12/02</span>
				    </div>
				  </div>
				   <div class="item">				    
				    <div class="content">
				    	<i></i>
				        <a class="header">[伟德国际]欢迎红利高达2,888元现金</a>
				        <span class="description">2017/12/02</span>
				    </div>
				  </div>
				</div>
				<div class="ui sizer vertical segment today1">
				    <div class="ui huge header headcolor font-22">英超盛世25轮过后，群雄逐鹿，看前四谁主沉浮？</div>
				    <p>2017-2018赛季英超联赛已经进行了25轮，在第25轮比赛中，由于切尔西和曼联的输球，让联赛前四的位置更加白热化，还有13轮联赛，各路豪门已经蓄势待发，开始做最后的冲刺了，这赛季谁将一呈豪情，谁又将掉落马下，让我们来看看英超前四的恩怨情仇！</p>
				</div>
			  </div>
			  <div class="column">
			    <p><img  width="100%" height="332"></p>
			  </div>
			</div>

			<div class="ui two column vertically stackable grid ">
			  <div class="column">
			    <p><img  width="100%" height="130"></p>
			  </div>
			  <div class="column">
			    <p><img  width="100%" height="130"></p>
			  </div>
			</div>
		    <!-- 优惠活动 和6686活动-->
		    <div class="ui grid activity stackable">
		    	<div class="nine wide column">
		    		<div class="ui divider today">		    	
		   			</div>
		    		<div class="ui header samehead">
		    			<span>
		    				<i></i>
		    				优惠活动
		    			</span>
		    			<s> > MORE </s>
		    		</div>
		    		<div class="ui three column grid">
		    			<div class="column">
		    				<img  width="100%" height="106">
		    				<p>华博娱乐 新春存款送18</p>
		    			</div>
		    			<div class="column">
		    				<img  width="100%" height="106">
		    				<p>同乐城 新年钓鱼送钱狗捕鱼</p>
		    			</div>
		    			<div class="column">
		    				<img  width="100%" height="106">
		    				<p>xin哥抢金币 让百万飞</p>
		    			</div>
		    		</div>
		    		<div class="ui three column grid">
		    			<div class="column">
		    				<img  width="100%" height="106">
		    				<p>利来国际 500万豪礼送不停</p>
		    			</div>
		    			<div class="column">
		    				<img  width="100%" height="106">
		    				<p>华博娱乐 新春存款送18</p>
		    			</div>
		    			<div class="column">
		    				<img  width="100%" height="106">
		    				<p>华博娱乐 新春存款送18</p>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="seven wide column">
		    	   <div class="ui divider today">		    	
		    		</div>
		    		<div class="ui header samehead">
		    			<span>
		    				<i></i>
		    				6686活动
		    			</span>
		    			<s> > MORE </s>
		    		</div>	
		    		<div class="ui items">
		    			<div class="item">
		    				<div class="image">
		    					<img  width="100%" height="68">
		    				</div>
		    				<div class="content">
		    					<a href="" class="header">【广东AG贵宾会】我们降限红啦!!快来体验!!</a>
		    					<div class="meta">
		    						<span>活动简介：我们降限红啦!!还有更多优惠噢!!!</span>
		    					</div>		    					
		    				</div>
		    			</div>
		    			<div class="item">
						    <div class="image">
						      <img  width="100%" height="68">
						    </div>
						    <div class="content">
						      <a class="header">海博20180元奖池带你过大年 1766海币等着你</a>
						      <div class="meta">
						        <span>活动简介：辞旧岁迎新年 20180元奖池带你过大年</span>
						      </div>						     
						    </div>
						</div>
						<div class="item">
						    <div class="image">
						      <img  width="100%" height="68">
						    </div>
						    <div class="content">
						      <a class="header">海博20180元奖池带你过大年 1766海币等着你</a>
						      <div class="meta">
						        <span>活动简介：辞旧岁迎新年 20180元奖池带你过大年</span>
						      </div>						     
						    </div>
						</div>	
						<div class="item">
						    <div class="image">
						      <img  width="100%" height="68">
						    </div>
						    <div class="content">
						      <a class="header">海博20180元奖池带你过大年 1766海币等着你</a>
						      <div class="meta">
						        <span>活动简介：辞旧岁迎新年 20180元奖池带你过大年</span>
						      </div>						     
						    </div>
						</div>			    			
		    		</div>	 
		    	</div>		    	
		    </div>
		    <!-- 图片展示 -->
		    <div class="ui centered card tu1">
			  <div class="image">
			    <img  width="100%" height="230">
			  </div>		
			</div>
		    <!-- 优秀测评 -->
		    <div class="ui divider today">
		    	
		    </div>
		    <div class="ui header ceping samehead">
			    <span>
			    	<i></i>
			    	优秀测评
			    </span>
			    <s> > MORE </s>
			</div>	
		    <div class="ui two column  stackable grid container ceping">		   	     	
		    	 	<div class="column">
		    	 		<div class="ui segment">
		    	 			<div class="ui items">
		    	 			    <div class="item">
								    <div class="image">
								      <img src="../images/wireframe/image.png" width="100%">
								    </div>
								    <div class="content">
								      <a class="header">zhaoheng0710 <span class="orange">评测了</span> 阿理彩票</a>
								      <div class="meta">
								        <span>华博的流畅度是我最喜欢的，娱乐城的界面也是非常舒适的，游戏起来没有任何压力，采用了目前最给力的沙巴体育平台，也是我最喜欢的原因之一，当然真人采用的AG还是非常的有实力的，绝对</span>
								      </div>			
								    </div>
								</div>
					 		</div>
		    	 		</div>		    	 		
		    	 	</div>
					<div class="column">
						<div class="ui segment">
							<div class="ui items">
							    <div class="item">
								    <div class="image">
								      <img src="../images/wireframe/image.png" width="100%">
								    </div>
								    <div class="content">
								      <a class="header">zhaoheng0710 <span class="orange">评测了</span> 阿理彩票</a>
								      <div class="meta">
								        <span>华博的流畅度是我最喜欢的，娱乐城的界面也是非常舒适的，游戏起来没有任何压力，采用了目前最给力的沙巴体育平台，也是我最喜欢的原因之一，当然真人采用的AG还是非常的有实力的，绝对</span>
								      </div>		
								    </div>
								</div>
					 		</div>
						</div>						
					</div>  					  
					<div class="column">
						<div class="ui segment">
							<div class="ui items">
								<div class="item">
								    <div class="image">
								      <img src="../images/wireframe/image.png" width="100%">
								    </div>
								    <div class="content">
								      <a class="header">zhaoheng0710 <span class="orange">评测了</span> 阿理彩票</a>
								      <div class="meta">
								        <span>华博的流畅度是我最喜欢的，娱乐城的界面也是非常舒适的，游戏起来没有任何压力，采用了目前最给力的沙巴体育平台，也是我最喜欢的原因之一，当然真人采用的AG还是非常的有实力的，绝对</span>
								      </div>			 
								    </div>
						  		</div>
						    </div>
						</div>						
					</div>  					  
					<div class="column">
						<div class="ui segment">
							<div class="ui items">
							    <div class="item">
								    <div class="image">
								      <img src="../images/wireframe/image.png" width="100%">
								    </div>
								    <div class="content">
								      <a class="header">zhaoheng0710 <span class="orange">评测了</span> 阿理彩票</a>
								      <div class="meta">
								        <span>华博的流畅度是我最喜欢的，娱乐城的界面也是非常舒适的，游戏起来没有任何压力，采用了目前最给力的沙巴体育平台，也是我最喜欢的原因之一，当然真人采用的AG还是非常的有实力的，绝对</span>
								      </div>			 
								    </div>
								</div>
					 		</div>
						</div>						
					</div>  					
					<div class="column">
						<div class="ui segment">
							<div class="ui items">
								<div class="item">
								    <div class="image">
								      <img src="../images/wireframe/image.png" width="100%">
								    </div>
								    <div class="content">
								      <a class="header">zhaoheng0710 <span class="orange">评测了</span> 阿理彩票</a>
								      <div class="meta">
								        <span>华博的流畅度是我最喜欢的，娱乐城的界面也是非常舒适的，游戏起来没有任何压力，采用了目前最给力的沙巴体育平台，也是我最喜欢的原因之一，当然真人采用的AG还是非常的有实力的，绝对</span>
								      </div>		
								    </div>
							    </div>
							</div>
						</div>						
					</div>  					   
					<div class="column">
						<div class="ui segment">
							<div class="ui items">
								<div class="item">
								    <div class="image">
								      <img src="../images/wireframe/image.png" width="100%" >
								    </div>
								    <div class="content">
								      <a class="header">zhaoheng0710 <span class="orange">评测了</span> 阿理彩票</a>
								      <div class="meta">
								        <span>华博的流畅度是我最喜欢的，娱乐城的界面也是非常舒适的，游戏起来没有任何压力，采用了目前最给力的沙巴体育平台，也是我最喜欢的原因之一，当然真人采用的AG还是非常的有实力的，绝对</span>
								      </div>			
								    </div>
								</div>
					        </div>
						</div>						
					</div>  			
			</div>
		
		   
		    <!-- 图片展示 -->
		    <div class="ui centered card tu2">
			  <div class="image">
			    <img width="100%" >
			  </div>		
			</div>

		    <!-- 真人，体育，电游，综合 -->
		    <div class="ui two column stackable grid trueman">
		    	<div class="thirteen wide column">
		    		<div class="ui segment">
		    			<div class="ui stackable two column vertically divided grid container">
		    				<div class="row">
			    				<div class="column">
			    					<div class="ui segment">
			    						<div class="ui header gengduo">真人 <span > > MORE</span> </div>
			    						   <div class="ui divider "></div>
			    						<div class="ui list">			    								
			    							<div class="item">【经验】百家乐输赢三大因素：概率路单、投注的变化和心态
			    							</div>
			    							<div class="item">【经验】对于真人轮盘游戏的使用技巧，你知道多少？</div>
			    							<div class="item">【经验】在整个德州扑克游戏过程中心理战术贯穿始终</div>
			    							<div class="item">【技巧】真人百家乐赢冲输缩 输赢就在一念之间</div>
			    							<div class="item">【经验】网络真钱游戏百家乐赢钱的心得体会</div>
			    						</div>
			    					</div>
			    				</div>
			    				<div class="column">
			    					<div class="ui segment">
			    						<div class="ui header gengduo">体育 <span> > MORE</span> </div>
			    							<div class="ui divider "></div>
			    						<div class="ui list">
			    							<div class="item">【经验】百家乐输赢三大因素：概率路单、投注的变化和心态
			    							</div>
			    							<div class="item">【经验】对于真人轮盘游戏的使用技巧，你知道多少？</div>
			    							<div class="item">【经验】在整个德州扑克游戏过程中心理战术贯穿始终</div>
			    							<div class="item">【技巧】真人百家乐赢冲输缩 输赢就在一念之间</div>
			    							<div class="item">【经验】网络真钱游戏百家乐赢钱的心得体会</div>
			    						</div>
			    					</div>
			    				</div>
			    			</div>
			    			<div class="row">
			    				<div class="column">
			    					<div class="ui segment">
			    						<div class="ui header gengduo">电游 <span> > MORE</span> </div>
			    							<div class="ui divider"></div>
			    						<div class="ui list">
			    							<div class="item">【经验】百家乐输赢三大因素：概率路单、投注的变化和心态
			    							</div>
			    							<div class="item">【经验】对于真人轮盘游戏的使用技巧，你知道多少？</div>
			    							<div class="item">【经验】在整个德州扑克游戏过程中心理战术贯穿始终</div>
			    							<div class="item">【技巧】真人百家乐赢冲输缩 输赢就在一念之间</div>
			    							<div class="item">【经验】网络真钱游戏百家乐赢钱的心得体会</div>
			    						</div>
			    					</div>
			    				</div>
			    				<div class="column">
			    					<div class="ui segment">
			    						<div class="ui header gengduo">综合 <span> > MORE</span> </div>
			    							<div class="ui divider"></div>
			    						<div class="ui list">
			    							<div class="item">【经验】百家乐输赢三大因素：概率路单、投注的变化和心态
			    							</div>
			    							<div class="item">【经验】对于真人轮盘游戏的使用技巧，你知道多少？</div>
			    							<div class="item">【经验】在整个德州扑克游戏过程中心理战术贯穿始终</div>
			    							<div class="item">【技巧】真人百家乐赢冲输缩 输赢就在一念之间</div>
			    							<div class="item">【经验】网络真钱游戏百家乐赢钱的心得体会</div>
			    						</div>
			    					</div>
			    				</div>
			    			</div>
		    			</div>		    			
		    		</div>
		    	</div>
		    	<div class="three wide column game">
		    		<div class="ui segment">
		    			<div class="ui list list1">
		    				<div class="ui header ceping">游戏介绍</div>
		    				<div class="ui two column stackable grid container introduce">
		    					<div class="column">
		    						<div class="ui segment">
		    							<div class="item">百家乐</div>
		    						</div>		    						
		    					</div>
		    					<div class="column">
		    						<div class="ui segment">
		    							<div class="item">亚洲盘口</div>
		    						</div>		    						
		    					</div>
		    					<div class="column">
		    						<div class="ui segment">
		    							<div class="item">二十一点</div>
		    						</div>		    						
		    					</div>
		    					<div class="column">
		    						<div class="ui segment">
		    							<div class="item">三公</div>
		    						</div>		    						
		    					</div>
		    					<div class="column">
		    						<div class="ui segment">
		    							<div class="item">牛牛</div>
		    						</div>		    						
		    					</div>
		    					<div class="column">
		    						<div class="ui segment">
		    							<div class="item">色碟</div>
		    						</div>		    						
		    					</div>
		    					<div class="column">
		    						<div class="ui segment">
		    							<div class="item">温州牌九</div>
		    						</div>		    						
		    					</div>
		    					<div class="column">
		    						<div class="ui segment">
		    							<div class="item">二八杠</div>
		    						</div>		    						
		    					</div>
		    				</div>		    		
		    			</div>
		    			<div class="ui list list2">
		    				<div class="ui header ceping">平台介绍</div>
		    				<div class="ui two column stackable grid container introduce">
		    				<div class="column">
		    						<div class="ui segment">
		    							<div class="item"><img src="images/qxw-pt1.png" width="87" height="30"></div>
		    						</div>		    						
		    				</div>	
		    				<div class="column">
		    						<div class="ui segment">
		    							<div class="item"><img src="images/qxw-pt2.png" width="87" height="30"></div>
		    						</div>		    						
		    				</div>	
		    				<div class="column">
		    						<div class="ui segment">
		    							<div class="item"><img src="images/qxw-pt3.png" width="87" height="30"></div>
		    						</div>		    						
		    				</div>	
		    				<div class="column">
		    						<div class="ui segment">
		    							<div class="item"><img src="images/qxw-pt4.png" width="87" height="30"></div>
		    						</div>		    						
		    				</div>	
		    				<div class="column">
		    						<div class="ui segment">
		    							<div class="item"><img src="images/qxw-pt5.png" width="87" height="30"></div>
		    						</div>		    						
		    				</div>	
		    				<div class="column">
		    						<div class="ui segment">
		    							<div class="item"><img src="images/qxw-pt6.png" width="87" height="30"></div>
		    						</div>		    						
		    				</div>	
		    				<div class="column">
		    						<div class="ui segment">
		    							<div class="item"><img src="images/qxw-pt7.png" width="87" height="30"></div>
		    						</div>		    						
		    				</div>	
		    				<div class="column">
		    						<div class="ui segment">
		    							<div class="item"><img src="images/qxw-pt8.png" width="87" height="30"></div>
		    						</div>		    						
		    				</div>		
		    				</div>	     		
		    			</div>
		    		</div>
		    	</div>
		    </div>
		    <!-- 五大联赛 -->
		    <div class="ui text container container5">
	           <h1 class="ui header gengduo">欧洲五大联赛/热门赛事-WINBET专家强力推荐</h1>
            </div>                
            <div class="column">
		    <table class="ui padded celled right aligned table">
		      <thead>
		        <th class="left aligned">赛事</th>
		        <th>开盘时间</th>
		        <th>主场球队</th>
		        <th>盘口</th>
		        <th>客场球队</th>
		        <th>免费推荐</th>
		        <th>比分</th>
		        <th>结尾</th>
		        <th>信心指数</th>
		      </thead>
		      <tbody>
		        <tr>
		          <td class="left aligned">葡超</td>
		          <td>12-18 02:00 </td>
		          <td>士砵亭</td>
		          <td>球半/两球</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>43g</td>
		          <td>等待更新</td>
		          <td>32g</td>  
		        </tr>
		        <tr>
		          <td class="left aligned">德甲</td>
		          <td>12-18 02:00 </td>
		          <td>RB萊比錫</td>
		          <td>球半/两球</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>31g</td>
		          <td>等待更新</td>
		          <td>13g</td>    
		        </tr>
		        <tr>
		          <td class="left aligned">英超</td>
		          <td>12-18 02:00 </td>
		          <td>般尼茅夫受</td>
		          <td>球半/两球</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>23g</td>
		          <td>等待更新</td>
		          <td>39g</td>     
		        </tr>
		        <tr>
		          <td class="left aligned">德甲</td>
		          <td>12-18 02:00 </td>
		          <td>漢諾威受</td>
		          <td>球半/两球</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>13g</td>
		          <td>等待更新</td>
		          <td>43g</td>        
		        </tr>
		        <tr>
		          <td class="left aligned">意甲</td>
		          <td>12-18 02:00 </td>
		          <td>費倫天拿</td>
		          <td>球半/两球</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>12g</td>
		          <td>等待更新</td>
		          <td>47g</td>     
		        </tr>
		         <tr>
		          <td class="left aligned">澳洲</td>
		          <td>12-18 02:00 </td>
		          <td>紐卡素噴射機</td>
		          <td>球半/两球</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>12g</td>
		          <td>等待更新</td>
		          <td>47g</td>       
		        </tr>
		        <tr>
		          <td class="left aligned">西甲</td>
		          <td>12-18 02:00 </td>
		          <td>利雲特 </td>
		          <td>球半/两球</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>12g</td>
		          <td>等待更新</td>
		          <td>47g</td>      
		        </tr>
		        <tr>
		          <td class="left aligned">澳洲</td>
		          <td>12-18 02:00 </td>
		          <td> 墨爾本城</td>
		          <td>球半/两球</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>12g</td>
		          <td>等待更新</td>
		          <td>47g</td>        
		        </tr>
		        <tr>
		          <td class="left aligned">英冠</td>
		          <td>12-18 02:00 </td>
		          <td>米杜士堡 </td>
		          <td>球半/两球</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>12g</td>
		          <td>等待更新</td>
		          <td>47g</td>       
		        </tr>
		         <tr>
		          <td class="left aligned">英超</td>
		          <td>12-18 02:00 </td>
		          <td>球半/两球</td>
		          <td>12g</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>12g</td>
		          <td>等待更新</td>
		          <td>47g</td>      
		        </tr>
		        <tr>
		          <td class="left aligned">西甲</td>
		          <td>12-18 02:00 </td>
		          <td>球半/两球</td>
		          <td>12g</td>
		          <td>樸迪莫倫斯 </td>
		          <td>士砵亭</td>
		          <td>12g</td>
		          <td>等待更新</td>
		          <td>47g</td>    
		        </tr>
		      </tbody>
		    </table>
    <div class="ui fluid  button">
       查看更多精彩赛事>>
    </div>
            </div>
		</div>

<!-- 首页部分结束 -->
	<!-- 娱乐城部分	 -->
		<div class="ui bottom attached tab segment" data-tab="second">
		  <p>当前位置： <a href="#">首页</a> > <a href="#">关于我们</a> </p>

		</div>
	<!-- 优惠活动 -->
		<div class="ui bottom attached tab segment" data-tab="third">
		  第3
		</div>
	<!-- 行业资讯 -->
		<div class="ui bottom attached tab segment" data-tab="four">
		  第4
		</div>
	<!-- 游戏技巧 -->
		<div class="ui bottom attached tab segment" data-tab="five">
		  第5
		</div>
	<!-- 招商认证 -->
		<div class="ui bottom attached tab segment" data-tab="six">
		  第6
		</div>
	</div>

</div>
<!-- 最新公告部分 -->
<!-- 表格部分 12行 9列 -->
<!-- 底部 -->
 <div class="ui inverted vertical footer segment">   
    <div class="ui container">
    	<div class="ui header gengduo">
    	实用链接
   		</div>		
	</div>
	<div class="ui divider"></div>
    <div class="ui center aligned container">
      <div class="ui stackable inverted divided grid">
        <div class="three wide column">
          <h4 class="ui inverted header">彩票</h4>
          <div class="ui inverted link list">
          	<a href="#" class="item">中彩网</a>
            <a href="#" class="item">新浪彩票频道</a>
            <a href="#" class="item">彩票最新开奖</a>
            <a href="#" class="item">大赢家博客</a>
            <a href="#" class="item">中国体彩网</a>
            <a href="#" class="item">中国福彩网</a>            
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">国内新闻</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">网易新闻</a>
            <a href="#" class="item">QQ新闻</a>
            <a href="#" class="item">新华网</a>
            <a href="#" class="item">人民网</a>
            <a href="#" class="item">新浪新闻</a>
            <a href="#" class="item">凤凰网</a>
          </div>
        </div>
        <div class="three wide column">
          <h4 class="ui inverted header">国内银行</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">平安银行</a>
            <a href="#" class="item">招商银行</a>
            <a href="#" class="item">中国银行</a>
            <a href="#" class="item">建设银行</a>
            <a href="#" class="item">农业银行</a>
            <a href="#" class="item">工商银行</a>
          </div>
        </div>
            <div class="three wide column">
          <h4 class="ui inverted header">比分大全</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">008比分</a>
            <a href="#" class="item">篮球比分</a>
            <a href="#" class="item">迅盈比分</a>
            <a href="#" class="item">7M比分</a>
            <a href="#" class="item">捷报比分</a>
            <a href="#" class="item">博体比分</a>
          </div>
        </div>
            <div class="three wide column">
          <h4 class="ui inverted header">电视直播</h4>
          <div class="ui inverted link list">
            <a href="#" class="item">PPLIVE</a>
            <a href="#" class="item">新传体育宽频</a>
            <a href="#" class="item">迅雷看看</a>
            <a href="#" class="item">CCTV网络电视</a>
            <a href="#" class="item">7M直播</a>
            <a href="#" class="item">体育直播吧</a>
          </div>
        </div>
            <div class="three wide column">
          <h4 class="ui inverted header">搜索</h4>
          <div class="ui inverted link list">
          	<a href="#" class="item">微博搜索</a>
            <a href="#" class="item">SOSO</a>
            <a href="#" class="item">360搜索</a>
            <a href="#" class="item">搜狗中文搜索</a>
            <a href="#" class="item">百度中文</a>
            <a href="#" class="item">搜索GOOGLE搜索</a>            
          </div>
        </div> 
      </div>
    </div>
    <div class="grid center">
    		<a class="item" href="#">关于我们</a>|
	        <a class="item" href="#">招商银行</a>|
	        <a class="item" href="#">APP下载</a>|
	        <a class="item" href="#">手机端</a>           
      </div>
      <div class="last-line center">
      	COPYRIGHT © 2009-2017 IQ.WINBET.CC ALL RIGHTS RESERVED. POWERED BY STUDIO 
        <a class="item" href="#">
        	<img src="images/qxw-pc-footer.png" class="ui image">
        </a>
      </div>
  </div>
</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/semantic.min.js"></script>
<script type="text/javascript">
	$('.menu .item')
	  .tab({
	  })
	;
</script>
</html>
<style type="text/css">
/* Some basic formatting */
code {
  background-color: #E0E0E0;
  padding: 0.25em 0.3em;
  font-family: 'Lato';
  font-weight: bold;
}
.container {
  padding: 4.3em 0em 1.65em 0;
}
.ui.dividing.header,
.first {
  margin-top: 5em;
}
.ui.dividing.header:first-child {
  margin-top: 0em;
}
h1,
h3 {
  margin-top: 10em;
}
img {
  display: block;
  max-width: 100%;
}
img + img {
  margin-top: 0.5em;
}
/* Shows content box (not negative margins) */
.grid {
  position: relative;
}
.grid:before {
  position: absolute;
  top: 1rem;
  left: 1rem;
  background-color: #F0F0F0;
  /*content: '';*/
  width: calc(100% - 2rem);
  height: calc(100% - 2rem);
  box-shadow: 0px 0px 0px 1px #DDDDDD inset;
}
.ui.divided.grid:before,
.celled.grid:before {
  display: none;
}
.ui.aligned .column:after {
  display: none !important;
}
.grid .column:not(.row):not(.grid):after {
  background-color: rgba(86, 61, 124, .15);
  box-shadow: 0px 0px 0px 1px rgba(86, 61, 124, 0.2) inset;
  content: "";
  display: block;
  min-height: 50px;
}
@media only screen and (max-width: 768px) {
  .stackable.grid:before {
    width: 100%;
    left: 0em;
  }
}
</style>