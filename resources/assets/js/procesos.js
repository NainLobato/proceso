$.ajaxSetup({
    headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}

/* Save Victima Function */
$(document).ready(function() {
    $('#submitProceso').on('click', function (e) {
        e.preventDefault();
        var dataJSON = JSON.stringify(getFormData($('#procesoForm')));  
         $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            type: "POST",
            url: '/procesos/public/procesos/saveProceso',
            data: dataJSON,
            contentType : 'application/json; charset=utf-8',
            dataType: 'json',
            success: function( msg,data) {
               
                if (msg.id){
                     $("#idProceso").val(msg.id);
                    $("#ajaxResponse").append("<div>Proceso Guardado exitosamente ahora puede Agregar Victimas/Imputados/Delitos</div>");
                }
                else{
                    $("#ajaxResponse").append("<div>Errores:"+JSON.stringify(msg)+"</div>");
                }
            }
        });
    });
});

$(document).on('blur', "input[type=text]", function () {
    $(this).val(function (_, val) {
        return val.toUpperCase();
    });
});

        $(function () {
            var $relationVictima = $('.add-proceso-victima');
            var $removeRelationVictima = $('.relation-proceso-victima');
            var addRelationVictima = function () {
                $victima = $('#idVictima');
                $direccionVictima = $('#idDireccionVictima');
                $relationProcesoVictima = $('.relation-proceso-victima');
                var dirVictima= $('#idDireccionVictima').val() != undefined ? $('#idDireccionVictima').val() : " ";
                $relationProcesoVictima.append('<div class="row proceso-victima" data-link-id="' + $victima.val() + '" style="margin-bottom: 10px;">'
                    + '<input type="hidden" name="victimas[]" value="' + $victima.val() + '">'
                    + '<input type="hidden" name="direccionesVictimas[]" value="' + dirVictima + '">'
                    + '<div class="col-sm-offset-2 col-sm-5" data-victima="' + $victima.val() + '">' + $('#idVictima option:selected').text() + '</div>'
                    + '<div class="col-sm-4" data-direccion="' + dirVictima + '">' + dirVictima + '</div>'
                    + '<div class="col-sm-1 text-center"><i class="fa fa-times icon-red remove-proceso-victima"></i></div>'
                    + '</div>');

                var dataJSON = JSON.stringify({idPersona:$victima.val(),idDireccion:$direccionVictima.val(),idProceso:$('#idProceso').val()});  
                 $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    type: "POST",
                    url: '/procesos/public/procesos/saveVictima',
                    data: dataJSON,
                    contentType : 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function( msg,data ) {
                        $("#ajaxResponse").append("<div>"+data+"</div>");
                    }
                });
            };
            $relationVictima.on('click', addRelationVictima);
            
            var removeRelationVictimaF = function (event) {
                $(this).closest('.row').remove();
            };
             $removeRelationVictima.on('click', 'i', removeRelationVictimaF);
        });



        $(function () {
            var $relationImputado = $('.add-proceso-imputado');
            var $removeRelationImputado = $('.relation-proceso-imputado');
            var addRelationImputado = function () {
                $imputado = $('#idImputado');
                $esDetenidoImputado = $('#esDetenido');
                $fechaDetencionImputado = $('#fechaDetencionImputado');

                $direccionImputado = $('#idDireccionImputado');
                var dirImputado= $('#idDireccionImputado').val() != undefined ? $('#idDireccionImputado').val() : " ";
                $relationProcesoImputado = $('.relation-proceso-imputado');
                $relationProcesoImputado.append('<div class="row proceso-imputado" data-link-id="' + $imputado.val() + '" style="margin-bottom: 10px;">'
                    + '<input type="hidden" name="imputados[]" value="' + $imputado.val() + '">'
                    + '<input type="hidden" name="direccionesImputados[]" value="' + $direccionImputado.val() + '">'
                    + '<input type="hidden" name="detenidosImputados[]" value="' + $esDetenidoImputado.val() + '">'
                    + '<div class="col-sm-offset-2 col-sm-5" data-imputado="' + $imputado.val() + '">' + $('#idImputado option:selected').text() + '</div>'
                    + '<div class="col-sm-4" data-direccion="' + dirImputado + '">' + dirImputado + '</div>'
                    + '<div class="col-sm-1 text-center"><i class="fa fa-times icon-red remove-proceso-imputado"></i></div>'
                    + '</div>');
                var dataJSON = JSON.stringify({idPersona:$imputado.val(),idDireccion:$direccionImputado.val(),idProceso:$('#idProceso').val(),esDetenido:$esDetenidoImputado.val(),fechaDetencion:$fechaDetencionImputado.val()});
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    type: "POST",
                    url: '/procesos/public/procesos/saveImputado',
                    data: dataJSON,
                    contentType : 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function( msg,data ) {
                        $("#ajaxResponse").append("<div>"+data+"</div>");
                    }
                });

            };
            $relationImputado.on('click', addRelationImputado);
            var removeRelationImputadoF = function (event) {
                $(this).closest('.row').remove();
            };
             $removeRelationImputado.on('click', 'i', removeRelationImputadoF);
        });
    
        $(document).ready(function() {
          $("#idFiscal").select2();
        });


        $(document).ready(function() {
          $("#idUIPJ").select2();
        });
  
         $(document).ready(function() {
          $("#idVictima").select2();
        });
 
       $(document).ready(function() {
          $("#idImputado").select2();
        });
        
        $(document).ready(function() {
          $("#idJuez").select2();
        });

        $(document).ready(function() {
          $("#idJuzgado").select2();
        });

        $(document).ready(function() {
          $("#idVictimaImputacion").select2();
        });
 
       $(document).ready(function() {
          $("#idImputadoImputacion").select2();
        });

        $(document).ready(function() {
          $("#idDelitoImputado").select2();
        });
         


 $(document).ready(function(){
    $('input:radio[name="esEmpresa"]').change(
        function(){
            if ($(this).is(':checked') && $(this).val() == '0') {
                $('#datosPersonasFisicas').show();
                $('#datosPersonasMorales').hide();
            }
            else{
                $('#datosPersonasFisicas').hide();
                $('#datosPersonasMorales').show();
            }
        }
    );
});