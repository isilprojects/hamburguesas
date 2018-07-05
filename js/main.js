
$(document).ready(function(){
    $(".views-row").each(function(i){
        $(this).addClass("item" + (i+1));
            $(this).click(function(){
            $('section#form').show();
            $('#hTitle').append($(this).find('h2').text());
            $('#pTotal').append($(this).find('#pCosto').val());
            var imgProducto = $(this).find('img').attr('src')
            $('#box-imgs').append("<div id='imgV'><img style='width: 200px;height: 160px;object-fit: cover;' src='" + imgProducto + "'></div>");
        });
    });
    $('.close').click(function(){
        $('section#form').hide();
        $('#hTitle').empty();
        $('#pTotal').empty();
        $('#box-imgs').empty();
        // $("#ad:checkbox").attr('checked', false);
    });    
});





function calcularPrecio(){
    obj = document.miform['ad'];
    console.log(obj);
    totalChecks = obj.length;
    totalSumado = 0;
    for( i=0; i<totalChecks; i++){ 
        // switch(i) {
        //         case 0:
        //             if( obj[i].checked == true ){
        //                 document.getElementById('box-imgs').innerHTML += '<ol><li>html PIakahcu</li></ol>';
        //             }else{
        //             }
        //             break;
        //         case 1:
        //             if( obj[i].checked == true ){
        //                 document.getElementById('box-imgs').innerHTML += '<ol><li>html datsadasdsada</li></ol>';
        //             }else{

        //             }
        //             break;
        //         default:
        //     }
        if( obj[i].checked == true ){

            valor = obj[i].value;        
            totalSumado = totalSumado + Number(valor);

            
        }
    }
    document.getElementById('pTotal').value = totalSumado; 
}




