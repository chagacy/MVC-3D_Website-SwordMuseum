$(document).ready(function(){

	var str = "";
	
	console.log(str);

	var url = "index.php/apiGetModelData";

	console.log('URL to php controller method is: ', url);

	 $.getJSON(url, function(json) {
        console.log('Web service response: ', json);

        str += '<div class="carousel-inner" role="listbox">';
		
		str += '<div class="carousel-item active">' +
	              '<a data-options=\'{"touch" : false}\' class="fancybox" data-fancybox data-src="#animatedModal" href="javascript:;" onMouseUp="' + json[0].image + '()">' +
	                '<div class="view">' +
	                 '<img class="d-block w-100" src="assets/images/'+ json[0].image +'.jpg" alt="First slide">' +
	                  '<div class="mask rgba-black-light"></div>' +
	                '</div>' +
	                '<div class="carousel-caption transparent-bg">' +
	                  '<h3 class="h3-carousel">' + json[0].modelTitle + '</h3>' +
	                  '<p>' + json[0].modelDescription +'</p>' +
	                '</div>' +
	              '</a>' +
	            '</div>';

		for(var i=1; i<json.length; i++){
			str += '<div class="carousel-item">' +
              '<a data-options=\'{"touch" : false}\' data-fancybox data-src="#animatedModal" href="javascript:;" onMouseUp="' + json[i].image + '()">' +
                '<div class="view">' +
                 '<img class="d-block w-100" src="assets/images/'+ json[i].image +'.jpg" alt="First slide">' +
                  '<div class="mask rgba-black-light"></div>' +
                '</div>' +
                '<div class="carousel-caption transparent-bg">' +
                  '<h3 class="h3-carousel">' + json[i].modelTitle + '</h3>' +
                  '<p>' + json[i].modelDescription +'</p>' +
                '</div>' +
              '</a>' +
            '</div>';
		}

		str += '</div>';

		document.getElementById("modelCarousel").innerHTML=str;
	});
});