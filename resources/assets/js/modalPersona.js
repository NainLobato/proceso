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


  function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}




$(document).on('blur', "input[type=text]", function () {
    $(this).val(function (_, val) {
        return val.toUpperCase();
    });
});

      
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


    $('#guardarPersona').on('click', function(e){
        e.preventDefault();

        if(!$("#personaForm")[0].checkValidity()){
            alert('Existen campos invalidos');
            return;
        }
        var personaObject=getFormData($('#personaForm'));
        var dataJSON = JSON.stringify(personaObject);

         $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            type: "POST",
            url: '/procesos/public/personas/storeModal',
            data: dataJSON,
            contentType : 'application/json; charset=utf-8',
            dataType: 'json',
            success: function( msg,data) {
                if (msg.id){
                    $("#idPersona").val(msg.id);
                    $(".modal-body").html("<div>Persona Agregada Correctamente, de clic al botón CERRAR</div>");
                }
                else{   
                    $(".modal-body").html("<div>Error al crear la Persona</div>");
                }
            }
        }); 
    });
