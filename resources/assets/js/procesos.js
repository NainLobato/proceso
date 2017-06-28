$.ajaxSetup({
    headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



//JS script
$('.modal-persona').on('click', function(e){
  e.preventDefault();
  $('#modalPersona').modal('show').find('.modal-body').load($(this).attr('data-href'));
});

/*$('#procesoForm').on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
});*/

  function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}

function getImplicados(){
    var dataJSON = JSON.stringify({idProceso:$("#idProceso").val()});  
                 $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    type: "POST",
                    url: '/procesos/public/procesos/getImplicados',
                    data: dataJSON,
                    contentType : 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function( msg,data ) {
                         $('#idVictimaImputacion').find('option').remove().end();
                         $('#idImputadoImputacion').find('option').remove().end();
                         $.each(msg.victimas, function(valor, texto) {
                              $('#idVictimaImputacion').append(new Option(texto.nombre, texto.id));
                         });
                         $.each(msg.imputados, function(val, texto) {
                              $('#idImputadoImputacion').append(new Option(texto.nombre, texto.id));
                         });
                    }
    });
}

/* Save Victima Function */
$(document).ready(function() {  
    $('#submitProceso').on('click', function (e) {
        $("#procesoForm").submit(function(e){
         e.preventDefault();
        });
        $("#procesoForm").submit();
        //e.preventDefault();
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
                    $("#ajaxResponse").html("<div>Proceso Guardado exitosamente ahora puede Agregar Victimas/Imputados/Delitos</div>");
                    $("#divVictimas").show();
                    $("#divImputados").show();
                }
                else{   
                    $("#ajaxResponse").html("<div>No se pudo guardar el proceso, error: "+JSON.stringify(msg)+"</div>");
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
                

                if($('#idProceso').val()==undefined || $('#idProceso').val()=="" || $('#idProceso').val()==null){
                    alert('Registre los datos del proceso antes de agregar victimas');
                    return;
                }

                $victimaSelect = $('#idVictima');
                $victimaSelect2 = $('#select2-idVictima-container');
                var options = $('#idVictima option');

                if($victimaSelect2.text()=="" || $victimaSelect2.text()==null){
                    alert('Asegurese de seleccionar una victima antes de dar clic al botón Agregar');
                    return;
                }

                $victima={"nombre":$victimaSelect2.text(),"id":options[options.length-1].value};
         

                
                $direccionVictima = $('#idDireccionVictima');
                $relationProcesoVictima = $('.relation-proceso-victima');
                var dirVictima= $('#idDireccionVictima').val() != undefined ? $('#idDireccionVictima').val() : " ";
                var dataJSON = JSON.stringify({idPersona:$victima.id,idDireccion:$direccionVictima.val(),idProceso:$('#idProceso').val()});
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    type: "POST",
                    url: '/procesos/public/procesos/saveVictima',
                    data: dataJSON,
                    contentType : 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function( msg,data ) {
                        if(msg.id){
                            $relationProcesoVictima.append('<div class="row proceso-victima" data-victima-id="' + msg.id
                            + '<input type="hidden" name="victimas[]" value="' + $victima.id + '">'
                            + '<input type="hidden" name="direccionesVictimas[]" value="' + dirVictima + '">'
                            + '<div class="col-sm-10 col-xs-10" data-victima="' + $victima.nombre + '">' + $victima.nombre + '</div>'
                            + '<div class="col-sm-2 col-xs-2 text-center"><i class="fa fa-times icon-red remove-proceso-victima"></i></div>'
                            + '</div>');
                            getImplicados();
                        }
                        else{
                            $relationProcesoVictima.append('<div class="row proceso-victima">'+msg.message+'</div><i class="fa fa-times icon-red remove-proceso-victima"></i>');
                        }
                    }
                });
            };
            $relationVictima.on('click', addRelationVictima);
            
            var removeRelationVictimaF = function (event) {
                var dataJSON = JSON.stringify({idVictima:$(this).closest('.row').attr('data-victima-id'),idProceso:$('#idProceso').val()});  
                $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                type: "POST",
                url: '/procesos/public/procesos/deleteVictima',
                data: dataJSON,
                contentType : 'application/json; charset=utf-8',
                dataType: 'json',
                    success: function( msg,data ) {
                        if(msg.id){
                            getImplicados();
                        }
                        else{
                                $relationProcesoVictima.append('<div class="row proceso-victima">'+msg.message+'</div><i class="fa fa-times icon-red remove-proceso-victima"></i>');
                        }
                    },
                    error: function( msg,data ) {
                        if(msg.id){
                            getImplicados();
                        }
                        else{
                            $relationProcesoVictima.append('<div class="row proceso-victima">'+msg.message+'</div><i class="fa fa-times icon-red remove-proceso-victima"></i>');
                        }
                    }
                    
                });
                $(this).closest('.row').remove();
            };

            $removeRelationVictima.on('click', 'i', removeRelationVictimaF);
        });

        $(function () {
            var $relationImputado = $('.add-proceso-imputado');
            var $removeRelationImputado = $('.relation-proceso-imputado');
            var addRelationImputado = function () {
                if($('#idProceso').val()==undefined || $('#idProceso').val()=="" || $('#idProceso').val()==null){
                    alert('Registre los datos del proceso antes de agregar imputados');
                    return;
                }
                $imputadoSelect = $('#idImputado');
                $imputadoSelect2 = $('#select2-idImputado-container');
                var options = $('#idImputado option');

                if($imputadoSelect2.text()=="" || $imputadoSelect2.text()==null){
                    alert('Asegurese de seleccionar un imputado antes de dar clic al botón Agregar');
                    return;
                }


                $imputado={"nombre":$imputadoSelect2.text(),"id":options[options.length-1].value};
                $esDetenidoImputado = $('#esDetenido');
                $fechaDetencionImputado = $('#fechaDetencionImputado');
                $direccionImputado = $('#idDireccionImputado');
                var dirImputado= $('#idDireccionImputado').val() != undefined ? $('#idDireccionImputado').val() : " ";
              
                var dataJSON = JSON.stringify({idPersona:$imputado.id,idDireccion:$direccionImputado.val(),idProceso:$('#idProceso').val(),esDetenido:$esDetenidoImputado.val(),fechaDetencion:$fechaDetencionImputado.val()});
                $relationProcesoImputado = $('.relation-proceso-imputado');
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    type: "POST",
                    url: '/procesos/public/procesos/saveImputado',
                    data: dataJSON,
                    contentType : 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function( msg,data ) {
                        if(msg.id){
                            $relationProcesoImputado.append('<div class="row proceso-imputado" data-imputado-id="' + msg.id
                            + '<input type="hidden" name="imputados[]" value="' + $imputado.id + '">'
                            + '<input type="hidden" name="direccionesImputados[]" value="' + $direccionImputado.val() + '">'
                            + '<input type="hidden" name="detenidosImputados[]" value="' + $esDetenidoImputado.val() + '">'
                            + '<div class="col-sm-10 col-xs-10" data-imputado="' + $imputado.nombre + '">' + $imputado.nombre + '</div>'
                            + '<div class="col-sm-2 col-xs-2 text-center"><i class="fa fa-times icon-red remove-proceso-imputado"></i></div>'
                            + '</div>');
                            getImplicados();
                        }else{
                            $relationProcesoImputado.append('<div class="row proceso-imputado">'+msg.message+'</div><i class="fa fa-times icon-red remove-proceso-imputado"></i>');
                        }
                    },
                    error:function(msg,data){
                        $relationProcesoImputado.append('<div class="row proceso-imputado">'+msg.message+'</div><i class="fa fa-times icon-red remove-proceso-imputado"></i>');
                    }
                });

            };
            $relationImputado.on('click', addRelationImputado);
            var removeRelationImputadoF = function (event) {
                  var dataJSON = JSON.stringify({idImputado:$(this).closest('.row').attr('data-imputado-id'),idProceso:$('#idProceso').val()});  
                $.ajax({
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                type: "POST",
                url: '/procesos/public/procesos/deleteImputado',
                data: dataJSON,
                contentType : 'application/json; charset=utf-8',
                dataType: 'json',
                    success: function( msg,data ) {
                        if(msg.id){
                            getImplicados();
                        }
                        else{
                            $relationProcesoImputado.append('<div class="row proceso-imputado">'+msg.message+'</div><i class="fa fa-times icon-red remove-proceso-imputado"></i>');
                        }
                    }
                });
                $(this).closest('.row').remove();
            };
             $removeRelationImputado.on('click', 'i', removeRelationImputadoF);
        });



        $(function () {
            var $relationImputacion = $('.add-proceso-imputacion');
            var $removeRelationImputacion = $('.relation-proceso-imputacion');
            var addRelationImputacion = function () {
                if($('#idProceso').val()==undefined || $('#idProceso').val()=="" || $('#idProceso').val()==null){
                    alert('Registre los datos del proceso antes de agregar victimas');
                    return;
                }
                $victima = $('#idVictimaImputacion');
                $imputado = $('#idImputadoImputacion');
                $delito = $('#idDelitoImputado');
                $relacion = $('#idRelacionImputacion');
                $relationProcesoImputacion = $('.relation-proceso-imputacion');
                $relationProcesoImputacion.append('<div class="row proceso-imputacion" data-link-id="' + $victima.val()
                    + '<input type="hidden" name="victimasImputacion[]" value="' + $victima.val() + '">'
                    + '<input type="hidden" name="imputadosImputacion[]" value="' + $imputado.val() + '">'
                    + '<input type="hidden" name="delitosImputacion[]" value="' + $delito.val() + '">'
                    + '<div class="col-sm-10 col-xs-10"><i class="fa fa-user-circle"></i>' +  $('#idVictimaImputacion option:selected').text() +  '&nbsp;<i class="fa fa-gavel" aria-hidden="true"></i>' + $('#idDelitoImputado option:selected').text()  +  '&nbsp; <i class="fa fa-user-secret" aria-hidden="true"></i>' + $('#idImputadoImputacion option:selected').text() + '</div>'
                    + '<div class="col-sm-2 col-xs-2 text-center"><i class="fa fa-times icon-red remove-proceso-imputacion"></i></div>'
                    + '</div>');
                var dataJSON = JSON.stringify({idVictima:$victima.val(),idImputado:$imputado.val(),idDelito:$delito.val(),idTipoRelacion:$relacion.val(),idProceso:$("#idProceso").val()});  
                 $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                    type: "POST",
                    url: '/procesos/public/procesos/saveImputacion',
                    data: dataJSON,
                    contentType : 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function( msg,data ) {
                        $("#ajaxResponse").append("<div>"+data+"</div>");
                    }
                });
            };
            $relationImputacion.on('click', addRelationImputacion);
            
            var removeRelationImputacionF = function (event) {
                $(this).closest('.row').remove();
            };
             $removeRelationImputacion.on('click', 'i', removeRelationImputacionF);
        });


        $(document).ready(function() {
          $("#idFiscal").select2();
        });


        $(document).ready(function() {
          $("#idUIPJ").select2();
        });
  
          $(document).ready(function() {
            $("#idVictima").select2(
                {
                    placeholder: "Buscar persona...",
                    minimumInputLength: 4,
                    ajax: {
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                        type: "GET",
                        url: '/procesos/public/personas/getPersonas',
                        contentType : 'application/json; charset=utf-8',
                        dataType: 'json',
                        quietMillis: 1000,
                        delay:1000,
                        data: function (params) {
                          return {
                            q: params.term, // search term
                            page: params.page
                          };
                        },
                        processResults: function (data, params) {
                          // parse the results into the format expected by Select2
                          // since we are using custom formatting functions we do not need to
                          // alter the remote JSON data, except to indicate that infinite
                          // scrolling can be used
                          params.page = params.page || 1;

                          return {
                            results: data.personas,
                            pagination: {
                              more: (params.page * 30) < data.total
                            }
                          };
                        },
                        cache: true
                    },
                escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
                templateResult: formatRepo, // omitted for brevity, see the source of this page
                templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
 
       $(document).ready(function() {
            $("#idImputado").select2(
                {
                    placeholder: "Buscar persona...",
                    minimumInputLength: 4,
                    ajax: {
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
                        type: "GET",
                        url: '/procesos/public/personas/getPersonas',
                        contentType : 'application/json; charset=utf-8',
                        dataType: 'json',
                        quietMillis: 1000,
                        delay:1000,
                        data: function (params) {
                          return {
                            q: params.term, // search term
                            page: params.page
                          };
                        },
                        processResults: function (data, params) {
                          // parse the results into the format expected by Select2
                          // since we are using custom formatting functions we do not need to
                          // alter the remote JSON data, except to indicate that infinite
                          // scrolling can be used
                          params.page = params.page || 1;

                          return {
                            results: data.personas,
                            pagination: {
                              more: (params.page * 30) < data.total
                            }
                          };
                        },
                        cache: true
                    },
                escapeMarkup: function (markup) { return markup; }, // let our custom formatter work
                templateResult: formatRepo, // omitted for brevity, see the source of this page
                templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
            });
        });
        
             function formatRepo (repo) {
              if (repo.loading) return repo.text;
              var markup = "<div class='select2-result-repository clearfix'>" +
                "<div class='select2-result-repository__meta'>" +
                  "<div class='select2-result-repository__title'>" + repo.nombre + "</div>";
              return markup;
            }

            function formatRepoSelection (repo) {
              return repo.nombre;
            }


        $(document).ready(function() {
          $("#idJuez").select2();
        });

        $(document).ready(function() {
          $("#idJuzgado").select2();
        });

       /* $(document).ready(function() {
            var idVictimaImputacionS= $("#idVictimaImputacion").select2(
                    {
                        initSelection: function(element, callback) {
                        callback($('#idVictimaImputacion').val());
                        }
                    }
                );
        });*/
 
       /*$(document).ready(function() {
          $("#idImputadoImputacion").select2();
        });*/

        $(document).ready(function() {
          $("#idDelitoImputado").select2();
        });

 $(document).ready(function(){

    $('#esDetenido').change(function(){
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



    //Add get Implicados
     
});