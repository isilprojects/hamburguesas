
txtBase = document.getElementById("txt_base");

$(document).ready(function(){

    $(".views-row").each(function(i){

    	$(this).addClass("item" + (i+1));
	       $(this).click(function(){
	       		$('section#form').show();
	       		$('#hTitle').append($(this).find('h2').text());
	       	});
    });

	 $('.close').click(function(){
	 	$('section#form').hide();
	 	$('#hTitle').empty();
	 });    
});