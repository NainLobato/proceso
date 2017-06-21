<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" data-toggle="tooltip" title="Ocultar datos" href="#divImputados">Imputados</a>
        </h3> 
    </div> 

    <div id="divImputados" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    <div class="row">
        {!! Form::open(['id' => 'frmImputados']) !!}
        <div class="col-md-3 col-xs-3">
             <div class="form-group">
                {!! Form::label('idImputado', 'Nombre Imputado:') !!}<br>
                {!! Form::select('idImputado', $personas, null, ['class' => 'form-control']) !!}
             </div>
        </div>

        <div class="col-md-1 col-xs-1">
             <div class="form-group">
                {!! Form::label('esDetenido', '¿Detenido?') !!}
                <br>
                {!! Form::checkbox('esDetenido', '1', null) !!} 
            </div>
        </div>

       <div class="col-md-1 col-xs-1">
             <div class="form-group">
                {!! Form::label('FechaDetencion', 'Fecha Detención') !!}<br>
                <br>
                {!! Form::date('fechaDetencionImputado', null, ['id'=>'fechaDetencionImputado','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-3 col-xs-3">
            <div class="form-group">
                {!! Form::label('idDireccion', 'Direccion:') !!}<br>
                {!! Form::select('idDireccionImputado', $direcciones, null, ['class' => 'form-control']) !!}
            </div>
        </div>
        {!! Form::close() !!}   

        <div class="col-md-1 col-xs-1">
            <div class="form-group">
             <button type="button" class="btn btn-primary add-proceso-imputado">Agregar Imputado</button>
            </div>
        </div>
        
        <div class="col-md-1 col-xs-1">
            <div class="form-group">
                <button type="button" data-href="../personas/createModal" class="btn btn-primary modal-persona" data-target="#myModal" data-toggle="modal"> Crear Victima </button>
            </div>
        </div>

        <div class="relation-proceso-imputado">
        @if(true or $action == '')
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
</div>
</div>
</div>
</div>
</div>