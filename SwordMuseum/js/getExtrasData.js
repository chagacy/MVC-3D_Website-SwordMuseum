$(document).ready(function(){

	var str = '<div id="main-text" class="extras col col-xs-12 col-sm-10 col-lg-6 transparent-bg">'+
              '<h3 class="text-white mt-0">Extra Features</h3>' +
              '<hr class="divider2 my-6">' +
              '<p class="text-white mb-4">Some extra features, that have been included in this website, are spoken about and any necessary references are given below.</p>' +
              '<br>';

	var url = "index.php/apiGetExtrasData";

	 $.getJSON(url, function(json) {
        console.log('Web service response: ', json);

		for(var i=0; i<json.length; i++){
			str += '<h4 class="text-white">' + json[i].extrasTitle + '</h4>' +
              		'<hr class="divider2 my-6">' +
					'<p class="text-white">' + json[i].extrasDescription + '</p>' +
					'<p class="text-white">'+ json[i].reference + '</p>';
		}

		str += '</div>';

		document.getElementById("extrasText").innerHTML=str;
	});
});