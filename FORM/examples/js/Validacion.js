$(document).ready(function () {
    $("#formid").validate({
        rules: {
            txtnombre: { maxlength:10},
            txtlugar: { maxlength:10}
        },
        messages: {
            txtnombre:"Excede el maximo de caracteres permitidos",
            txtlugar:"excede los caracteres permitidos",
            cNombre: "Necesita introducir el nombre",
            cTelefono: {
              required : "Comprobar el numero telefonico", 
                minlength: "digite un minimo de 6 digitos",
                maxlength: "digite un maximo de 10 digitos"
            },
            cMarca: "Necesita introducir el marca",
            cModelo: "Necesita introducir el modelo",
            cColor: "Necesita introducir el color",
            cImei: "Necesita introducir el IMEI",
            cFalla: "Necesita introducir la falla reportada",
            cDX: "Necesita introducir el DX",
            cCosto: "Necesita introducir el costo",
        }
    });
    
        $('.solo-numero').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9]/g, '');
          });
    
    $('.precio').keyup(function (){
            this.value = (this.value + '').replace(/[^0-9].[^0-9]/g, '');
          });
    $('#formid').button(function() {
         if($('#telNumber').val() == "" || $('#pin').val() == "" || $('#codigo').val() == "" || $('#otro').val() == ""){
            alert("Necesita insertar algun desbloqueo");
             return false;
                          
       }  else 
          return true;			
    });
});