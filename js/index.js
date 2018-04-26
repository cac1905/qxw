$('#context2 .menu .item')
  .tab({ 
    context: 'parent'
  })
;
// 娱乐城公司简介和基本信息切换
$("#yulexiaocheng .yulecheng > .column.tab-info > .menu > .item").each(function(){
  $(this).click ( function() {
    $(this).addClass('active').siblings().removeClass('active')
    $(this).parent('.menu').parent(".tab-info").children(".ui.segment").eq($(this).index()).addClass('active').siblings().removeClass('active')
  })
})

$("#outResult .sousuojieguo .yulecheng .column .ui.item a").click(function(){
  $(this).addClass('active').siblings().removeClass('active')
  $("#outResult .yulecheng > .column.tab-info .ui.segment").eq($(this).index()).addClass('active').siblings().removeClass('active')
})

$('#marquee').liMarquee ({
  circular: true
});
// 三个浮动按钮  .fixed-ad
/*function width() {
 var screenWidth = document.body.clientWidth
 var boxWidth = $('#inner-section').width()
 var adwidth = screenWidth - boxWidth 
 var adwidthend = adwidth/2 - 100
 if( adwidthend > 10 ){
    $('.fixed-ad').css("right", adwidthend + 'px')
 } else {
    $('.fixed-ad').css("right", adwidth/2-40 + 'px')
 }
 }
  width()
  $(window).resize( function() { 
    width()
  })*/
  var tabtitle = [ '首页' , '娱乐城' , '优惠活动' , '行业资讯' , '游戏技巧' , '招商认证' ]
  for (var i = 0; i < tabtitle.length; i++ ) {
    $("#mytabmenu a.item span").eq(i).text("" + tabtitle[i] + "")
  }
  // 关于我们
  $('.twelve.wide.stretched.column .ui.segment').eq(1).show().siblings().hide()
  $('.gunyu-us-menu a.item').click( function() {
    $(this).addClass('active').siblings().removeClass('active')
    $('.twelve.wide.stretched.column .ui.segment').eq($(this).index()).show().scrollTop(0).siblings().hide()
  })
  $( function() {
    $("#renzheng").click( function() {
      $("html, body").animate({scrollTop:0}, 0)
      $("#mytabmenu a:nth-child(6)").click().addClass("active")
    })
  })
  $(function(){
    $(".ui.breadcrumb a.section:nth-child(1)").click( function() {
      var url = "index.php"
      $(location).attr('href', url);
    })
  })
  $(function(){
     $("#context2 .samepic .grid .column .ui.segment").each( function() {
       $(this).click( function() { 
          window.open("https://www.hk6686.com");
       })
     })    
     // 6686活动添加链接
     $("#6686-content .item").each( function(index, value) {
       $(this).click( function() {   
          var newindex = $(this).index() + 7
          var url = "innerhuodong" + newindex + ".php"
          // $(location).attr('href', url);
          window.open(url,'_blank')
       })
     })
     // 优惠活动添加链接
     $("#yhhuodong1>div:nth-child(3)>.column").each( function(index, value) {
       $(this).click( function() {
           console.log(1111)
          var newindex = $(this).index() + 1
          var url = 'innerhuodong' + newindex + '.php'
          window.open(url,'_blank')
       })
     })
      $("#yhhuodong1>div:nth-child(4)>.column").each( function(index, value) {
          $(this).click( function() {
              var newindex = $(this).index() + 4
              var url = 'innerhuodong' + newindex + '.php'
              window.open(url,'_blank')
          })
      })

      /*给广告图片添加链接*/
      $('.link_pic').click(function () {
          window.open('https://www.hk6686.net/','_blank')
      })



     //游戏分类背景切换
      $('#list_button button:nth-child(1)').addClass('green-btn')
      $('#list_button button').click(function () {
          $(this).addClass('green-btn').siblings().removeClass('green-btn')
      })
      $('#list_button2 button:nth-child(1)').addClass('green-btn')
      $('#list_button2 button').click(function () {
          $(this).addClass('green-btn').siblings().removeClass('green-btn')
      })


  })





    


