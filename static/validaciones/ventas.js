var mensaje = '';
function validarDetalle(detalle){
    /*----
        valida que este vacio mi detalle
    -----*/
   if (!(detalle.length)) {mensaje = 'No ingreso los items';}
   return detalle.length
}

function getMensaje(){return mensaje;}