
$(document).ready(function(){
    $(".views-row").each(function(i){
        $(this).addClass("item" + (i+1));
            $(this).click(function(){
            $('section#form').show();
            $('#hTitle').append($(this).find('h2').text());
            $('#pTotal').append($(this).find('#pCosto').text());
        });
    });
    $('.close').click(function(){
        $('section#form').hide();
        $('#hTitle').empty();
        $('#pTotal').empty();
        // $("#ad:checkbox").attr('checked', false);
    });    
});


var productos = document.getElementById("itemPro");
// console.log (productos);

for (var i = 0; i < productos.length; i++) {
    var vista = productos[i];
    console.log(vista);
}


function calcularPrecio(){
    obj = document.miform['ad'];
    console.log(obj);
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




