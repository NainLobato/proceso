<div>
     {!! Form::open(['id' => 'frmVictimas']) !!}

<!-- Idpersona Field -->
<div class="col-sm-offset-0 col-sm-3">
    {!! Form::label('idVictima', 'Nombre Victima:') !!}<br>
    {!! Form::select('idVictima', $personas, null, ['class' => 'form-control']) !!}
</div>
<!-- Iddireccion Field -->
<div class="col-sm-offset-1 col-sm-2">
    {!! Form::label('idDireccion', 'Direccion:') !!}<br>
    {!! Form::select('idDireccionVictima', $direcciones, null, ['name'=>'idDireccionVictima','id'=>'idDireccionVictima','class' => 'form-control']) !!}
</div>
<div class="col-sm-offset-0 col-sm-1">
    <br>
        <button type="button" class="btn btn-primary add-proceso-victima">Agregar Victima</button>
         <button type="button" data-href="../personas/createModal" class="btn btn-primary modal-persona" data-target="#myModal" data-toggle="modal">Crear Victima</button>
        
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
</div>
    {!! Form::close() !!}