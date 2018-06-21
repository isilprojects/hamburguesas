
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
        $("#ad:checkbox").attr('checked', false);
    });    
});

function calcularPrecio(){
    obj = document.miform['ad'];
    totalChecks = obj.length;
    totalSumado = 0;
    for( i=0; i<totalChecks; i++){ 
        switch(i) {
            case 1:
                pProducto = 9.90;
                break;
            case 2:
                pProducto = 10.90;
                break;
            case 3:
                pProducto = 9.90;
                break;
            case 4:
                pProducto = 11.90;
                break;
            case 5:
                pProducto = 9.90;
                break;
            case 6:
                pProducto = 12.90;
                break;
            case 7:
                pProducto = 14.90;
                break;
            case 8:
                pProducto = 16.90;
                break;
            default:
                0
        }
        if( obj[i].checked == true ){
            valor = obj[i].value;        
            totalSumado = totalSumado + Number(valor);
        }
    }
    document.getElementById('pTotal').innerHTML = totalSumado + pProducto; 
}





