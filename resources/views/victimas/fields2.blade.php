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
<!--<div class="col-sm-offset-0 col-sm-1"><br>
    {!! Form::button('AGREGAR VICTIMA',  ['class' => 'btn btn-primary', 'id' => 'btnAgregarVictima']) !!}
</div>-->

<div class="col-sm-offset-0 col-sm-1">
    <br>
        <button type="button" class="btn btn-primary add-proceso-victima">Agregar Victima</button>
    </div>



<div class="relation-proceso-victima">
    @if (true or $action == '')
        @foreach(array() as $victima)
            <div class="row row-proceso-victima" style="margin-bottom: 10px;">
                <input type="hidden" name="victimas[]" value="{!! $victima->id !!}">
                <input type="hidden" name="direccionesVictimas[]" value="{!! $victima->direccion()->id !!}">
                <div class="col-sm-offset-2 col-sm-5">{!! $victima->nombre . ' ' . $victima->paterno !!}</div>
                <div class="col-sm-4">{!! $victima->direccion()->id !!}</div>
                <div class="col-sm-1 text-center">
                    <i class="fa fa-times icon-red remove-proceso-victima"></i>
                </div>
            </div>
        @endforeach
    @endif
</div>
