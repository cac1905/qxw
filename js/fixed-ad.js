$(function () {

    /*点击回到顶部效果*/
    $('body').scroll(function(){
        var scro = document.documentElement.scrollTop || window.pageYOffset || document.body.scrollTop;
        if(scro>= 800){
            $("#backtoTop").fadeIn(100); // 开始淡入
        } else{
            $("#backtoTop").stop(true,true).fadeOut(100); // 如果小于等于 100 淡出
        }

    });

    $("#backtoTop").click(function() {
        $("html,body").animate({
            scrollTop: 0
        }, 400);
        return false;
    });

})



