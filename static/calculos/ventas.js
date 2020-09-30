/*-----------------
    funciones de calculo
-------------------*/
function calcularSubtotal(cantidad, precio){
    let resultado = parseFloat(cantidad) * parseFloat(precio);
    total += resultado; //acumula cantidad
    $('#id_total').text('$' + total);
    return resultado;
}

function restarSubtotal(cantidad, precio){
    let resultado = parseFloat(cantidad) * parseFloat(precio);
    total -= resultado; //restar cantidad
    $('#id_total').text('$' + total);
    return resultado;
}



function calcularVuelto(){
    let valor_pago= $('#id_pago').val();
    let resultado =  valor_pago - total;
    $('#id_vuelto').text('$' + resultado);
}

/*------------------
    funciones de calculo
-------------------*/