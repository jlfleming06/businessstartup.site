function tplawesome(e,t){res=e;for(var n=0;n<t.length;n++){res=res.replace(/\{\{(.*?)\}\}/g,function(e,r){return t[n][r]})}return res}

function sendRequest () {
		// repare the request
		var request = gapi.client.youtube.search.list({
			part: "snippet",
			type: "video",
			q: encodeURIComponent(keyword).replace(/%20/g, "+"),
			maxResults: amount,
			order: "viewCount"
		});
		// execute the request
		request.execute(function(responce) {
			var results = responce.result;
			$.each(results.items, function(index, item) {
				$.get("videoTemplate.html", function(data) {
					$("#videos").append(tplawesome(data, [{"width":width, "height":height, "videoid": item.id.videoId}]));
				});
			});
		});
}

function init() {
	// gapi.client.setApiKey("AIzaSyBoeF-5_yO3Mv7TJHnlbz2QeICd3kperyE");
	gapi.client.setApiKey("AIzaSyA0em1KQtUXbHTxvGgta4HMnkcxbIfxXMs");
	gapi.client.load("youtube", "v3", function() {
		// yt api is ready
		sendRequest();
	});
}