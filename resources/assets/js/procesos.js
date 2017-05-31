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
            success: function( msg ) {
                $("#ajaxResponse").append("<div>"+msg+"</div>");
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
            var $removeRelationVictima = $('.remove-proceso-victima');
            var addRelationVictima = function () {
                 $victima = $('#idVictima');
                $direccionVictima = $('#idDireccionVictima');
                $relationProcesoVictima = $('.relation-proceso-victima');
                $relationProcesoVictima.append('<div class="row proceso-victima" data-link-id="' + $victima.val() + '" style="margin-bottom: 10px;">'
                    + '<input type="hidden" name="victimas[]" value="' + $victima.val() + '">'
                    + '<input type="hidden" name="direccionesVictimas[]" value="' + $direccionVictima.val() + '">'
                    + '<div class="col-sm-offset-2 col-sm-5" data-victima="' + $victima.val() + '">' + $('#idVictima option:selected').text() + '</div>'
                    + '<div class="col-sm-4" data-direccion="' + $direccionVictima.val() + '">' + $('#idDireccionVictima').val() + '</div>'
                    + '<div class="col-sm-1 text-center"><i class="fa fa-times icon-red remove-proceso-victima"></i></div>'
                    + '</div>');
            };

            $relationVictima.on('click', addRelationVictima);
            var removeRelationVictimaF = function (event) {
                $(this).closest('.row').remove();
            };

             $removeRelationVictima.on('click', 'i', removeRelationVictimaF);

        });



        $(function () {
            var $relationImputado = $('.add-proceso-imputado');
            var $removeRelationImputado = $('.remove-proceso-imputado');
            var addRelationImputado = function () {
                $imputado = $('#idImputado');
                $direccionImputado = $('#idDireccionImputado');
                $relationProcesoImputado = $('.relation-proceso-imputado');
                $relationProcesoImputado.append('<div class="row proceso-imputado" data-link-id="' + $imputado.val() + '" style="margin-bottom: 10px;">'
                    + '<input type="hidden" name="imputados[]" value="' + $imputado.val() + '">'
                    + '<input type="hidden" name="direccionesImputados[]" value="' + $direccionImputado.val() + '">'
                    + '<div class="col-sm-offset-2 col-sm-5" data-imputado="' + $imputado.val() + '">' + $('#idImputado option:selected').text() + '</div>'
                    + '<div class="col-sm-4" data-direccion="' + $direccionImputado.val() + '">' + $('#idDireccionImputado').val() + '</div>'
                    + '<div class="col-sm-1 text-center"><i class="fa fa-times icon-red remove-proceso-imputado"></i></div>'
                    + '</div>');
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
 
         function guardarProceso() {
            
         }



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