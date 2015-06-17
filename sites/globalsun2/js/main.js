// JavaScript Document
$(document).ready(function(){  
	$('tr:even').addClass('vert'); //coloration du tableau
	$('.sensible a').hide();
	/*$('tr.sensible').hover(function(){ //version avec callback
		$('a', this).show();
	} , function(){
		$('a', this).hide();
	});*/
	$('tr.sensible').mouseenter(function(){
		$('a', this).show();
		});
	$('tr.sensible').mouseleave(function(){
		$('a', this).hide();
		});
});