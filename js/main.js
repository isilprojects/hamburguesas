
function calcularPrecio(){
    obj = document.miform['ad'];
    totalChecks = obj.length;
    totalSumado = 0;
    for( i=0; i<totalChecks; i++){ 
        if( obj[i].checked == true ){
            valor = obj[i].value;        
            totalSumado = totalSumado + Number(valor);
        }
    }
    document.getElementById('pTotal').innerHTML = totalSumado; 
}

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
	 	$("#ad:checkbox").attr('checked', false);

	 });    
});