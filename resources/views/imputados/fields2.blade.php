<!-- Idpersona Field -->
<div class="col-sm-offset-0 col-sm-3">
    {!! Form::label('idImputado', 'Nombre Imputado:') !!}
    {!! Form::select('idImputado', $personas, null, ['class' => 'form-control']) !!}

    {!! Form::label('esDetenido', '¿Detenido?') !!}
    {!! Form::checkbox('esDetenido', '1', null) !!} 
</div>

<!-- Idproceso Field -->
    {!! Form::hidden('idProceso', 1, null, ['class' => 'form-control']) !!}
<!-- Iddireccion Field -->
<div class="col-sm-offset-1 col-sm-2">
    {!! Form::label('idDireccion', 'Direccion:') !!}
    {!! Form::select('idDireccionImputado', $direcciones, null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<!--<div class="col-sm-offset-0 col-sm-1"><br>
    {!! Form::button('AGREGAR IMPUTADO',  ['class' => 'btn btn-primary', 'id' => 'btnAgregarImputado']) !!}
</div>-->

<div class="col-sm-offset-0 col-sm-1">
    <br>
        <button type="button" class="btn btn-primary add-proceso-imputado">Agregar Imputado</button>
    </div>



<div class="relation-proceso-imputado">
    @if (true or $action == '')
        @foreach(array() as $imputado)
            <div class="row row-proceso-imputado" style="margin-bottom: 10px;">
                <input type="hidden" name="imputados[]" value="{!! $imputado->id !!}">
                <input type="hidden" name="direccionesImputados[]" value="{!! $imputado->direccion()->id !!}">
                <div class="col-sm-offset-2 col-sm-5">{!! $imputado->nombre . ' ' . $imputado->paterno !!}</div>
                <div class="col-sm-4">{!! $imputado->direccion()->id !!}</div>
                <div class="col-sm-1 text-center">
                    <i class="fa fa-times icon-red remove-proceso-imputado"></i>
                </div>
            </div>
        @endforeach
    @endif
</div>
