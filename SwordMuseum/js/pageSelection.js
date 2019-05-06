// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#models').hide();
	$('#extras').hide();
	$('#downloads').hide();


	$('.navHome').click(function(){
		$('#home').show();
		$('#models').hide();
		$('#extras').hide();
		$('#downloads').hide();
  
	});

	$('.navModels').click(function(){
		$('#home').hide();
		$('#models').show();
		$('#extras').hide();	
		$('#downloads').hide();  
	});

	$('.navExtras').click(function(){
		$('#home').hide();
		$('#models').hide();
		$('#extras').show();
		$('#downloads').hide();
	});

	$('.navDownloads').click(function(){
		$('#home').hide();
		$('#models').hide();
		$('#extras').hide();
		$('#downloads').show();
	});
}