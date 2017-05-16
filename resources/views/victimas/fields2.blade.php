<!-- Idpersona Field -->
<div class="col-sm-offset-0 col-sm-3">
    {!! Form::label('idVictima', 'Nombre Victima:') !!}
    {!! Form::select('idVictima', $personas, null, ['class' => 'form-control']) !!}
</div>
<!-- Idproceso Field -->
    {!! Form::hidden('idProceso', 1, null, ['class' => 'form-control']) !!}

<!-- Iddireccion Field -->
<div class="col-sm-offset-1 col-sm-2">
    {!! Form::label('idDireccion', 'Direccion:') !!}
    {!! Form::select('idDireccionVictima', $direcciones, null, ['class' => 'form-control']) !!}
</div>
<!-- Submit Field -->
<div class="col-sm-offset-0 col-sm-1"><br>
    {!! Form::button('AGREGAR VICTIMA',  ['class' => 'btn btn-primary', 'id' => 'btnAgregarVictima']) !!}
</div>


<div class="relation-proceso-victima">
    @if (true or $action == '')
        @foreach(array() as $victima)
            <div class="row row-proceso-victima" style="margin-bottom: 10px;">
                
                <input type="hidden" name="victimas[]" value="{!! $victima->id !!}">
                <input type="hidden" name="direcciones[]" value="{!! $direccion->id !!}">

                <div class="col-sm-offset-2 col-sm-5">{!! $victima->nombre . ' ' . $victima->paterno !!}</div>
                <div class="col-sm-4">{!! $direccion->id !!}</div>
                <div class="col-sm-1 text-center">
                    <i class="fa fa-times icon-red remove-proceso-victima"></i>
                </div>
            </div>
        @endforeach
    @endif
</div>
@push('scripts')
<script>
  var $removeRelationVictima = $('.relation-proceso-victima');
    var addRelationVictima = function () {
      $victima = $('#idVictima');
      $direccion = $('#idDireccionVictima');
      $relationProcesoVictima = $('.relation-proceso-victima');
      $relationProcesoVictima.append('<div class="row proceso-victima" data-link-id="' + $victima.val() + '" style="margin-bottom: 10px;">'
        + '<input type="hidden" name="victimas[]" value="' + $victima.val() + '">'
        + '<input type="hidden" name="direcciones[]" value="' + $direccion.val() + '">'
        + '<div class="col-sm-offset-2 col-sm-5" data-person="' + $victima.val() + '">' + $('#idVictima option:selected').text() + '</div>'
        + '<div class="col-sm-4" data-cargo="' + $direccion.val() + '">' + $('#idDireccionVictima').val() + '</div>'
        + '<div class="col-sm-1 text-center"><i class="fa fa-times icon-red remove-secretaria-person"></i></div>'
        + '</div>');
    };

    btnAgregarVictima
    </script>
    @endpush