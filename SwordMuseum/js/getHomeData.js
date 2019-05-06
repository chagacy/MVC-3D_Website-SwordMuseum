$(document).ready(function(){

	var str = '<div id="main-text" class="homepage col-xs-12 col-sm-4 transparent-bg">';
	
	console.log(str);

	var url = "index.php/apiGetHomeData";

	console.log('URL to php controller method is: ', url);

	 $.getJSON(url, function(json) {
        console.log('Web service response: ', json);

		for(var i=0; i<json.length; i++){
			str += '<h2 class="text-white mt-0">' + json[i].title + '</h2>';
			str += '<hr class="divider2 my-6">';
			str += '<p class="text-white mb-4">' + json[i].description + '</p>';
		}

		str += "</div>";

		console.log(str);

		document.getElementById("homepageText").innerHTML=str;
	});
});