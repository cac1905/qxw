// 资讯 部分 b 
// $.ajax({
// 	type: "get",
// 	url: "../qxw-pc/data/pagedatas.json",
// 	async: true,
// 	success: function(data){
// 		var json = eval(data)
// 		var strUrl=window.location.href
// 		var i = strUrl[strUrl.length-1]	
// 		console.log(i)
// 		var head = json[i].head
// 		var time = json[i].time
// 		var num = json[i].num
// 		var imgSrc = json[i].imgSrc
// 		var detail = json[i].detail
// 		var content = json[i].content
// 		var somep = $("<div class='ui somep'></div>")
// 		for( j=0; j < content.length; j++ ) {
// 			var paragraps = content[j]
// 			var ptag = $("<p>"+ paragraps +"</p>")
// 			somep.append(ptag)
// 		}
// 		var useallpage = $("<div id='useallpage'></div>")
// 		var uihead = $("<div class='ui head'>"+ head +"</div>")			
// 		var uimeta = $("<div class='ui meta'><span class='time'>"+ time +"</span>|<span>浏览："+ num +"</span></div>")			
// 		var uidetail = $("<div class='ui detail'>"+ detail +"</div>")			
// 		var uiimg = $("<div class='ui img'><img src='"+ imgSrc +"'></img></div>")			
// 		// var uihead = $("<div></div>")
// 		useallpage.append(uihead)
// 		useallpage.append(uimeta)
// 		useallpage.append(uidetail)
// 		useallpage.append(uiimg)
// 		useallpage.append(somep)
//   		// $("#InnerdataWrap .ui.list .item")
// 	}
// })