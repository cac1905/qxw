// 优惠活动
$.ajax({
    type: "get",
    url: "../quanxunpc/data/threesame.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        var youhui = json[0]

        // 优惠活动
        var img = $("<div class='ui two column vertically stackable grid youxijiqiao'></div>")
        for (var i = 0; i < youhui[0].length; i++) {
            var src = youhui[0][i].src
            var imgwraper = $("<div class='column'><p><img class='link_pic' width='100%' height='90' src='" + src + "'></p></div>")
            img.append(imgwraper)
        }
        var onebread = $("<div class='ui breadcrumb'>当前位置：<a class='section'>首页</a><i>></i><a class='section'>" + youhui[1].title + "</a></div>")
        var youhuibody = $("<div class='ui two column vertically padded grid toutiao stackable'></div>")
        var leftSrc = youhui[2].left.src
        // 轮播图开始
        var oneColumn1 = $("<div class='column'></div>")
        var swiper = $("<div class='swiper-container'></div>")
        var wraper = $("<div class='swiper-wrapper'></div>")
        var pages = $("<div class='swiper-pagination'></div>")
        oneColumn1.append(swiper)
        swiper.append(wraper)
        swiper.append(pages)

        var number = leftSrc.length - 1
        for (var index = 0; index <= number; index++) {
            var imgwraper = $("<div class='swiper-slide'><img class='link_pic' width='100%' style='height:332px;' src='" + leftSrc[index] + "'></div>")
            wraper.append(imgwraper)
        }
        //轮播 结束
        var rightMeta = youhui[2].right.meta
        var rightTitle = youhui[2].right.title
        var column2 = $("<div class='column'></div>")
        var column2Inner = $("<div class='ui sizer vertical segment today'><div class='ui huge header headcolor font-22'>" + rightTitle + "</div><p>" + rightMeta + "</p>")
        youhuibody.append(oneColumn1)
        column2.append(column2Inner)
        var rightContent = youhui[2].right.content
        var segwrap = $("<div class='ui relaxed divided list today'></div>")
        for (var j = 0; j < rightContent.length; j++) {
            var front = rightContent[j].front
            var name = rightContent[j].name
            var time = rightContent[j].time
            var src1 = rightContent[j].src
            var item = $("<div class='item'><div class='content'><i></i><a target='_blank' href='" + src1 + "' class='header'>【" + front + "】" + name + "</a><span class='description'>" + time + "</span></div></div>")
            segwrap.append(item)
        }
        column2.append(segwrap)
        youhuibody.append(column2)
        $("#threeOne").append(img)
        $("#threeOne").append(onebread)
        $("#threeOne").append(youhuibody)
    }
})
// 行业资讯
$.ajax({
    type: "get",
    url: "../quanxunpc/data/threesame.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        var hangye = json[1]
        // 优惠活动
        var img = $("<div class='ui two column vertically stackable grid youxijiqiao'></div>")
        for (var i = 0; i < hangye[0].length; i++) {
            var src = hangye[0][i].src
            var imgwraper = $("<div class='column'><p><img class='link_pic' width='100%' height='90' src='" + src + "'></p></div>")
            img.append(imgwraper)
        }
        var onebread = $("<div class='ui breadcrumb'>当前位置：<a class='section'>首页</a><i>></i><a class='section'>" + hangye[1].title + "</a></div>")
        var youhuibody = $("<div class='ui two column vertically padded grid toutiao stackable'></div>")
        var leftSrc = hangye[2].left.src
        // var column1 = $("<div class='column'><p><img width='100%' height='332' src='"+ leftSrc +"'></p></div>")
        // 轮播图开始
        var oneColumn1 = $("<div class='column'></div>")
        var swiper = $("<div class='swiper-container'></div>")
        var wraper = $("<div class='swiper-wrapper'></div>")
        var pages = $("<div class='swiper-pagination'></div>")

        oneColumn1.append(swiper)
        swiper.append(wraper)
        swiper.append(pages)

        var number = leftSrc.length - 1
        for (var index = 0; index <= number; index++) {
            var imgwraper = $("<div class='swiper-slide'><img class='link_pic' width='100%' style='height:332px;' src='" + leftSrc[index] + "'></div>")
            wraper.append(imgwraper)
        }
        //轮播 结束
        var rightMeta = hangye[2].right.meta
        var rightTitle = hangye[2].right.title
        var column2 = $("<div class='column'></div>")
        var column2Inner = $("<div class='ui sizer vertical segment today'><div class='ui huge header headcolor font-22'>" + rightTitle + "</div><p>" + rightMeta + "</p>")
        youhuibody.append(oneColumn1)
        column2.append(column2Inner)
        var rightContent = hangye[2].right.content
        var segwrap = $("<div class='ui relaxed divided list today'></div>")
        for (var j = 0; j < rightContent.length; j++) {
            var front = rightContent[j].front
            var name = rightContent[j].name
            var time = rightContent[j].time
            var src1 = rightContent[j].src
            var item = $("<div class='item'><div class='content'><i></i><a target='_blank' href='" + src1 + "' class='header'>【" + front + "】" + name + "</a><span class='description'>" + time + "</span></div></div>")
            segwrap.append(item)
        }
        column2.append(segwrap)
        youhuibody.append(column2)
        $("#threeTwo").append(img)
        $("#threeTwo").append(onebread)
        $("#threeTwo").append(youhuibody)
    }
})
// 游戏技巧
$.ajax({
    type: "get",
    url: "../quanxunpc/data/threesame.json",
    async: false,
    success: function (data) {
        var json = eval(data)
        var youxi = json[2]
        // 优惠活动
        var img = $("<div class='ui two column vertically stackable grid youxijiqiao'></div>")
        for (var i = 0; i < youxi[0].length; i++) {
            var src = youxi[0][i].src
            var imgwraper = $("<div class='column'><p><img class='link_pic' width='100%' height='90' src='" + src + "'></p></div>")
            img.append(imgwraper)
        }
        var onebread = $("<div class='ui breadcrumb'>当前位置：<a class='section'>首页</a><i>></i><a class='section'>" + youxi[1].title + "</a></div>")
        var youhuibody = $("<div class='ui two column vertically padded grid toutiao stackable'></div>")
        var leftSrc = youxi[2].left.src
        // var column1 = $("<div class='column'><p><img width='100%' height='332' src='"+ leftSrc +"'></p></div>")
        // 轮播图开始
        var oneColumn1 = $("<div class='column'></div>")
        var swiper = $("<div class='swiper-container'></div>")
        var wraper = $("<div class='swiper-wrapper'></div>")
        var pages = $("<div class='swiper-pagination'></div>")
        oneColumn1.append(swiper)
        swiper.append(wraper)
        swiper.append(pages)

        var number = leftSrc.length - 1
        for (index = 0; index <= number; index++) {
            var imgwraper = $("<div class='swiper-slide'><img class='link_pic' width='100%' style='height:332px;' src='" + leftSrc[index] + "'></div>")
            wraper.append(imgwraper)
        }
        //轮播 结束
        var rightMeta = youxi[2].right.meta
        var rightTitle = youxi[2].right.title
        var column2 = $("<div class='column'></div>")
        var column2Inner = $("<div class='ui sizer vertical segment today'><div class='ui huge header headcolor font-22'>" + rightTitle + "</div><p>" + rightMeta + "</p>")
        youhuibody.append(oneColumn1)
        column2.append(column2Inner)
        var rightContent = youxi[2].right.content
        var segwrap = $("<div class='ui relaxed divided list today'></div>")
        for (var j = 0; j < rightContent.length; j++) {
            var front = rightContent[j].front
            var name = rightContent[j].name
            var time = rightContent[j].time
            var src1 = rightContent[j].src
            var item = $("<div class='item'><div class='content'><i></i><a target='_blank' href='" + src1 + "' class='header'>【" + front + "】" + name + "</a><span class='description'>" + time + "</span></div></div>")
            segwrap.append(item)
        }
        column2.append(segwrap)
        youhuibody.append(column2)
        $("#threeOther").append(img)
        $("#threeOther").append(onebread)
        $("#threeOther").append(youhuibody)
        var after3 = $("<div class='ui large header' style='margin-top:0;'>" + youxi[1].title + "</div>")
        $("#threeOther").after(after3)
    }
})
// 6686活动部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/6686huodong.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        // 数据展示开始
        var header = json.title
        $("#6686huodong > .header > span").html("<i></i>" + header + "")
        var length = json.content.length
        for (var i = 0; i < length; i++) {
            var src = json.content[i].imgSrc
            var title = json.content[i].title
            var titleSrc = json.content[i].titleSrc
            // var j = i + 1
            // var titleSrc = "innerhuodong"+ j+".php"
            var meta = json.content[i].meta
            var span = $("<span></span>")
            span.text("活动简介：" + meta + "")
            var meta = $("<div class='meta'></div>")
            meta.append(span)
            var a = $("<a class='header'>" + title + "</a>")
            a.attr({
                "href": "" + titleSrc + "",
                "target": "blank"
            })
            var content = $("<div class='content'></div>")
            content.append(a)
            content.append(meta)
            var img = $("<img>")
            img.attr({
                "src": "" + src + "",
                "style": "height:68px; width: 120px!important; overflow: hidden;"
            })
            var image = $("<div class='image'></div>")
            image.append(img)
            var item = $("<div class='item'></div>")
            item.append(image)
            item.append(content)
            $("#6686-content").append(item)
        }		// 数据展示结束
    }
})
// 尾部部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/footer.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        var header = json.header
        var footHeader = $("#footHeader")
        footHeader.text("" + header + "")
        var content = json.content
        var gridwrap = $("<div class='ui stackable inverted divided grid'></div>")
        for (var i = 0; i < content.length; i++) {
            var mya = content[i].link
            var awrap = $("<div class='ui inverted link list'></div>")
            for (j = 0; j < mya.length; j++) {
                var id = mya[j].id
                var name = mya[j].name
                var src = mya[j].src
                var a = $("<a></a>")
                a.attr({
                    "href": "" + src,
                    "class": "item",
                    "id": "" + id,
                    "target": "blank"
                })
                a.text("" + name)
                awrap.append(a)
            }
            var title = content[i].title
            var headerFour = $("<h4 class='ui inverted header'></h4>")
            headerFour.text("" + title)
            var column = $("<div class='three wide column'></div>")
            column.append(headerFour)
            column.append(awrap)
            gridwrap.append(column)
        }
        $("#allLink").append(gridwrap)
    }
})
// 行业资讯部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/hangyezixun.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        var header = json.header
        var number = json.number
        var infos = json.infos
        var content = json.content
        var num = "<span class='num'>" + number + "</span>"
        var items = "<span class='items'>" + infos + "</span>"
        var headFour = $("<h2 class='ui sub header'>共收录" + num + "家娱乐城，" + items + "条优惠信息</h2>")
        $("#hyzxHeader").append(header)
        $("#hyzxHeader").append(headFour)
        var segment = $("<div class='ui segment'></div>")
        var rowWrap = $("<div  class='ui stackable two column vertically divided grid container'></div>")
        segment.append(rowWrap)
        $("#hyzxLeft").append(segment)
        length = content.length
        for (var w = 0; w < length; w++) {
            var row = $("<div class='row'></div>")
            rowWrap.append(row)
            var contentWrap = content[w]
            var lengthColumn = content[w].length
            for (i = 0; i < lengthColumn; i++) {
                var title = contentWrap[i].title
                var headerList = $("<div class='ui header gengduo'>" + title + "<span> &gt; MORE</span></div>")
                var divider = $("<div class='ui divider'></div>")
                var segmentUi = $("<div class='ui segment'></div>")
                segmentUi.append(headerList)
                segmentUi.append(divider)
                var uilist = $("<div class='ui list'></div>")
                var list = contentWrap[i].list
                for (var j = 0; j < list.length; j++) {
                    var name = list[j].name
                    var item = list[j].item
                    var src = list[j].src
                    // var itemList = $("<div class='item'><a target='blank' href="+src+">【"+name+"】"+ item +"</a></div>")
                    var itemList = $("<div class='item'><a target='blank' href=" + src + ">" + item + "</a></div>")
                    uilist.append(itemList)
                }
                segmentUi.append(uilist)
                var column = $("<div class='column'></div>")
                column.append(segmentUi)
                row.append(column)
            }
        }

        var dttitle = json.dttitle
        var dongtai = json.dongtai
        var dtcolumnWrap = $("<div class='ui one column stackable grid container introduce'></div>")
        for (var h = 0; h < dongtai.length; h++) {
            var src = dongtai[h].src
            var title = dongtai[h].title
            var link = dongtai[h].link
            var dtcolumn = $("<div class='column'><div class='ui segment'><img class='link_pic' src='" + src + "' width='100%' height='72'><div class='item'><a target='blank' href='" + link + "'>" + title + "</a></div></div></div>")
            dtcolumnWrap.append(dtcolumn)
        }
        var seg = $("<div class='ui segment'></div>")
        $("#hyzxRight").append(seg)
        var uilist = $("<div class='ui list list1'></div>")
        seg.append(uilist)
        var uiheader = $("<div class='ui header ceping'>" + dttitle + "</div>")
        uilist.append(uiheader)
        uilist.append(dtcolumnWrap)

    }
})
// 头部部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/head.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        var length = json.length
        for (var i = 0; i < length; i++) {
            var number = json[i].number
            var list = json[i].list
            var listLength = list.length
            var columnWrap = $("<div class='ui six column grid'></div>")
            $("#context2 .secondary a.item span.num").eq(i).text(number)
            $("#context2 .ui.bottom.attached.tab.segment").eq(i).append(columnWrap)
            for (var j = 0; j < listLength; j++) {
                var title = list[j].title
                var meta = list[j].meta
                var src = list[j].imgSrc
                var img = $("<img src=" + src + " width= '163' height= '92'>")
                var p = $("<p>" + title + "</p>")
                var span = $("<span>" + meta + "</span>")
                var segment = $("<div class='ui segment'></div>")
                segment.append(img)
                segment.append(p)
                segment.append(span)
                var column = $("<div class='column'></div>")
                column.append(segment)
                columnWrap.append(column)
            }
        }
    }
})
// 内页优惠部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/inner-youhui.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        var head = json.header
        var number = json.number
        var infos = json.infos
        var content = json.content
        var length = content.length
        $("#yhhuodong1 .ui.breadcrumb a.section:last-child").text("" + head + "")
        var header = $("<div class='ui large header'></div>")
        header.text("" + head + "")
        var headerTwo = $("<h2 class='ui sub header'>共收录<span>" + number + "</span>家娱乐城，<span>" + infos + "</span>条优惠信息</h2>")
        header.append(headerTwo)
        var columnWrap = $("<div class='ui two column stackable grid container ceping'></div>")
        for (var i = 0; i < length; i++) {
            src = content[i].imgSrc
            title = content[i].title
            metadata = content[i].meta
            describe = content[i].describe
            number = content[i].number
            href = content[i].href
            // console.log(href)
            var column = $("<div class='column'></div>")
            var segment = $("<div class='ui segment'></div>")
            var items = $("<div class='ui items'></div>")
            var divider = $("<div class='ui divider'></div>")
            var item = $("<div class='item'></div>")
            var image = $("<div class='image'><a href='" + href + "'><img class='link_pic' src='" + src + "' width='100%'></a></div>")
            item.append(image)
            var contentInner = $("<div class='content'></div>")
            var aheader = $("<a href='" + href + "' class='header'>" + title + "</a>")
            var meta = $("<div class='meta'></div>")
            var aspan = $("<a href='" + href + "'>" + metadata + "</a>")
            meta.append(aspan)
            var desri = $("<div class='description'><a href='" + href + "'>" + describe + "</a></div>")
            var extra = $("<div class='extra'></div>")
            var num = $("<div class='ui right floated num'></div>")
            var share = $("<div class='ui right floated share'></div>")
            var imgNum = $("<img src='images/3-num.png'>")
            var imgShare = $("<img src='images/3-share.png'>")
            num.text("" + number + "")
            num.prepend(imgNum)
            share.text("分享按钮")
            share.prepend(imgShare)
            extra.append(num)
            extra.append(share)
            contentInner.append(aheader)
            contentInner.append(meta)
            contentInner.append(desri)
            contentInner.append(extra)
            item.append(contentInner)
            items.append(item)
            segment.append(items)
            column.append(segment)
            column.append(divider)
            columnWrap.append(column)
        }
        $("#yulehuodongInner").append(header)
        $("#yulehuodongInner").append(columnWrap)
    }
})
// 联赛部分
$.ajax({
    type: "get",
    url: "../quanxunpc/demo.php",
    async: true,
    success: function (data) {
        $('#tableWrap').html(data);
        var button = $("<div class='ui fluid button'><a href='http://qm6686.com' target='blank'>查看更多精彩赛事</a></div>")
        $('#tableWrap').append(button)
       /* var json = eval(data)
        var data = json.data
        length = data.length
        var tableWrap = $("#tableWrap")
        var table = $("<table class='ui padded celled right aligned table'></table>")
        var thead = $("<thead></thead>")
        var tr1 = $("<tr></tr>")
        var thList = ["赛事", "开盘时间", "主场球队", "盘口", "客场球队", "比分"]
        // tr1 = $("<tr><tr>")
        // thead.append(tr1)
        for (var h = 0; h < thList.length; h++) {
            var thitem = thList[h]
            var th = $("<th>" + thitem + "</th>")
            tr1.append(th)
        }
        thead.append(tr1)
        // console.log(trhead)
        var tbody = $("<tbody></tbody>")
        for (var i = 0; i < length; i++) {
            var dataI = data[i]
            var id = dataI.id
            var league = dataI.league
            var status = dataI.status
            var match_mins = dataI.match_mins
            var start_time = dataI.start_time
            var bifen_a = dataI.bifen_a
            var bifen_b = dataI.bifen_b
            var odds_num = dataI.odds_num
            var team_a = dataI.team_a
            var team_b = dataI.team_b
            var tr = $("<tr><td>" + league + "</td><td>" + start_time + "</td><td>" + team_a + "</td><td>" + odds_num + "</td><td>" + team_b + "</td><td>" + bifen_a + ":" + bifen_b + "</td></tr>")
            tbody.append(tr)
        }
        table.append(thead)
        table.append(tbody)
        var button = $("<div class='ui fluid button'><a href='http://qm6686.com' target='blank'>查看更多精彩赛事</a></div>")
        tableWrap.append(table)
        tableWrap.append(button)
        $("#tableWrap thead th:first-child").attr("class", "left aligned")
        $("#tableWrap tbody tr td:first-child").attr("class", "left aligned")
   */
    }
})
// menu部分 b 
$.ajax({
    type: "get",
    url: "../quanxunpc/data/menu.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        // console.log(json)
    }
})
// 头条部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/toutiao.json",
    async: false,
    success: function (data) {
        var json = eval(data)
        var head = json.header
        var content = json.content
        var imgR = json.imgRight

        var imgB = json.imgBottom
        var lists = json.lists
        var rsrc = imgR.src
        var length = lists.length
        blength = imgB.length
        var divider = $("<div class='ui divider today'></div>")
        var uiheader = $("<div class='ui header toutiao'><span><i></i>" + head + "</span><s> > MORE </s></div>")
        var columnWrap = $("<div class='ui two column vertically padded grid toutiao stackable'></div>")
        var twocolumnWrap = $("<div class='ui two column vertically stackable grid'></div>")
        $("#toutiao").append(divider)
        $("#toutiao").append(uiheader)
        $("#toutiao").append(columnWrap)
        $("#toutiao").append(twocolumnWrap)
        var segment = $("<div class='ui sizer vertical segment today'></div>")
        var segment1 = $("<div class='ui sizer vertical segment today1'></div>")
        var segtitle = $("<div class='ui huge header headcolor font-22'>" + content[0].title + "</div>")
        var segtitle1 = $("<div class='ui huge header headcolor font-22'>" + content[1].title + "</div>")
        var segp = $("<p>" + content[0].meta + "</p>")
        var segp1 = $("<p>" + content[1].meta + "</p>")
        segment.append(segtitle)
        segment.append(segp)
        segment1.append(segtitle1)
        segment1.append(segp1)
        var column1 = $("<div class='column'></div>")
        var awrap1 = $("<a target='_blank' href='" + content[0].src + "'></a>")
        var awrap2 = $("<a target='_blank' href='" + content[1].src + "'></a>")
        var itemWrap = $("<div class='ui relaxed divided list today'></div>")
        for (i = 0; i < length; i++) {
            var name = lists[i].name
            var title = lists[i].title
            var time = lists[i].time
            var src = lists[i].src
            var item = $("<div class='item'></div>")
            var itemInner = $("<div class='content'><i></i><a class='header' target='blank' href='" + src + "'>【" + name + "】" + title + "</a><span class='description'>" + time + "</span></div>")
            item.append(itemInner)
            itemWrap.append(item)
        }
        for (var h = 0; h < imgB.length; h++) {
            Bsrc = imgB[h].src
            var column = $("<div class='column' ><p><img class='link_pic' width='100%' height='130' src='" + Bsrc + "'></p></div>")
            twocolumnWrap.append(column)
        }
        column1.append(awrap1)
        awrap1.append(segment)
        column1.append(itemWrap)
        column1.append(awrap2)
        awrap2.append(segment1)
        /*轮播部分*/
        var oneColumn = $("<div class='column'></div>")
        var swiper = $("<div class='swiper-container'></div>")
        var wraper = $("<div class='swiper-wrapper'></div>")

        var number = imgR.src.length - 1
        for (var index = 0; index <= number; index++) {
            var imgwraper = $("<div class='swiper-slide'><img class='link_pic' width='100%' style='height:332px;' src='" + imgR.src[index] + "'></div>")
            wraper.append(imgwraper)
        }

        var pages = $("<div class='swiper-pagination'></div>")
        oneColumn.append(swiper)
        swiper.append(wraper)
        swiper.append(pages)


        columnWrap.append(column1)
        columnWrap.append(oneColumn)
    }
})
// 优惠活动部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/youhuihuodong.json",
    async: false,
    success: function (data) {
        var json = eval(data)
        var title = json.title
        var cardOne = json.cardOne
        var cardTwo = json.cardTwo
        var cardOneInner = $("<div class='image'><img class='link_pic' width='100%' height='230' src='" + cardOne.src + "'></div>")
        var cardTwoInner = $("<div class='image'><img class='link_pic' width='100%' height='230' src='" + cardTwo.src + "'></div>")
        $("#cardOne").append(cardOneInner)
        $("#cardTwo").append(cardTwoInner)
        var content = json.content
        length = content.length
        var divider = $("<div class='ui divider today'></div>")
        var header = $("<div class='ui header samehead'><span><i></i>" + title + "</span><s> > MORE </s></div>")
        $("#yhhuodong1").append(divider)
        $("#yhhuodong1").append(header)
        for (i = 0; i < length; i++) {
            lengthJ = content[i].length
            contentI = content[i]
            var columnWrap = $("<div class='ui three column grid'></div>")
            for (var j = 0; j < lengthJ; j++) {
                var src = contentI[j].imgSrc
                var titleInner = contentI[j].title
                var meta = contentI[j].meta
                var href = contentI[j].href
                var column = $("<div class='column'><img class='link_pic' width='100%' style='height:106px;' src='" + src + "' ><p><a href='" + href + "' target='blank'>" + titleInner + " " + meta + "</a></p></div>")
                columnWrap.append(column)
            }
            $("#yhhuodong1").append(columnWrap)
        }

    }
})
// 游戏技巧部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/youxijiqiao.json",
    async: true,
    success: function (data) {
        var json = eval(data)
    }
})
// 优秀测评部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/youxiuceping.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        var head = json.header
        var contentdata = json.content
        var clength = contentdata.length
        var columnWrap = $("<div class='ui two column stackable grid container ceping'></div>")
        var divider = $("<div class='ui divider today'></div>")
        var header = $("<div class='ui header ceping samehead'><span><i></i>" + head + "</span><s> > MORE </s></div>")
        $("#goodCeping").append(divider)
        $("#goodCeping").append(header)
        for (var i = 0; i < clength; i++) {
            var src = contentdata[i].imgsrc
            var name = contentdata[i].name
            var title = contentdata[i].title
            var metadata = contentdata[i].meta
            var asrc = contentdata[i].src
            var column = $("<div class='column'></div>")
            var segment = $("<div class='ui segment'></div>")
            var items = $("<div class='ui items'></div>")
            var item = $("<div class='item'></div>")
            var itema = $("<a target='_blank' href='" + asrc + "'></a>")
            item.append(itema)
            var images = $("<div class='image'><img src='" + src + "' style='height:120px;' width='100%'></div>")
            var content = $("<div class='content'></div>")
            var aheader = $("<a target='_blank'  class='header'>" + name + "<span class='orange'></span>" + title + "</a>")
            var meta = $("<div class='meta'><span>" + metadata + "</span></div>")
            content.append(aheader)
            content.append(meta)
            itema.append(images)
            itema.append(content)
            items.append(item)
            segment.append(items)
            column.append(segment)
            columnWrap.append(column)
        }
        $("#goodCeping").append(columnWrap)
    }
})
// 娱乐城部分
// $.ajax({
// 	type: "get",
// 	url: "../quanxunpc/data/yulecheng.json",
// 	async: true,
// 	success: function(data){
// 		var json = eval(data)
// 	}
// })
// 真人，体育，电游，综合部分
$.ajax({
    type: "get",
    url: "../quanxunpc/data/zrtydyzh.json",
    async: true,
    success: function (data) {
        var json = eval(data)
        var trueman = $("<div class='ui two column stackable grid trueman'></div>")
        var thirteen = $("<div class='thirteen wide column'></div>")
        var three = $("<div class='three wide column game'></div>")
        trueman.append(thirteen)
        trueman.append(three)
        $("#innerWrap2 #datashouye").append(trueman)
        // 第一个容器
        var thirteendata = json[0]
        lengthI = thirteendata.length
        var segmentOuter = $("<div class='ui segment'></div>")
        thirteen.append(segmentOuter)
        var rowWrap = $("<div  id='InnerdataWrap'  class='ui stackable two column vertically divided grid container'></div>")
        segmentOuter.append(rowWrap)
        for (var i = 0; i < lengthI; i++) {
            var row = $("<div class='row'></div>")
            rowWrap.append(row)
            var rowdata = thirteendata[i]
            for (h = 0; h < rowdata.length; h++) {
                var innerdata = rowdata[h]
                var title = innerdata.title;
                var content = innerdata.content
                var uiheader = $("<div class='ui header gengduo'>" + title + "<span> > MORE</span></div>")
                var divider = $("<div class='ui divider'></div>")
                var list = $("<div class='ui list'></div>")
                for (var j = 0; j < content.length; j++) {
                    var meta = content[j].meta
                    var itemdata = content[j].item
                    var src = content[j].src
                    //下面这段代码就是首页真人、体育、电游、综合经验
                    var item = $("<div class='item'><a target='_blank' href="+src+">【" + meta + "】" + itemdata + "</a></div>")
                    list.append(item)
                }
                var column = $("<div class='column'></div>")
                var segment = $("<div class='ui segment'></div>")
                segment.append(uiheader)
                segment.append(divider)
                segment.append(list)
                column.append(segment)
                row.append(column)
            }
        }
        // 第二个容器
        var threedata = json[1]
        var listWrap = $("<div class='ui segment'></div>")
        three.append(listWrap)
        var uilist1 = $("<div class='ui list list1'></div>")
        var uilist2 = $("<div class='ui list list2'></div>")
        listWrap.append(uilist1)
        listWrap.append(uilist2)
        var list1 = threedata[0]
        var columnWrap = $("<div class='ui two column stackable grid container introduce'></div>")
        var title = list1.title
        var list1Head = $("<div class='ui header ceping'>" + title + "</div>")
        var content1 = list1.content
        for (var k = 0; k < content1.length; k++) {
            var name = content1[k].name
            var src = content1[k].src
            var column = $("<div class='column'></div>")
            var seg = $("<div class='ui segment'></div>")
            var item = $("<div class='item'><a target='_blank' href='javascript:void(0)'>" + name + "</a></div>")
            seg.append(item)
            column.append(seg)
            columnWrap.append(column)
        }
        uilist1.append(list1Head)
        uilist1.append(columnWrap)
        var list2 = threedata[1]
        var title2 = list2.title
        var list2Head = $("<div class='ui header ceping'>" + title2 + "</div>")
        var content2 = list2.content
        var columnWrap2 = $("<div class='ui two column stackable grid container introduce'></div>")
        uilist2.append(list2Head)
        uilist2.append(columnWrap2)
        for (var n = 0; n < content2.length; n++) {
            var src = content2[n].src
            var link = content2[n].link
            var column2 = $("<div class='column'><div class='ui segment'><div class='item'><a href='javascript:void(0)'><img src='" + src + "' width='87' height='30'></a></div></div></div>")
            columnWrap2.append(column2)
        }
        uilist2.append(list2Head)
        uilist2.append(columnWrap2)
    }
})


