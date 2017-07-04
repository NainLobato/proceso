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
        <div class="col-md-4 col-xs-10">
             <div class="form-group">
                {!! Form::label('idImputado', 'Nombre Imputado:') !!}<br>
                {!! Form::select('idImputado', array(), null, ['class' => 'form-control']) !!}
             </div>
        </div>

        <div class="col-md-2 col-xs-3">
             <div class="form-group">
                {!! Form::label('esDetenido', '¿Detenido?') !!}
                <br>
                 {!! Form::hidden('esDetenido', false) !!}
                {!! Form::checkbox('esDetenido', '1', null) !!} 

            </div>
        </div>

       <div class="col-md-3 col-xs-10">
             <div class="form-group">
                {!! Form::label('FechaDetencion', 'Fecha Detención') !!}<br>
                {!! Form::date('fechaDetencionImputado', null, ['id'=>'fechaDetencionImputado','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-3 col-xs-10">
            <div class="form-group">
                {!! Form::label('idDireccion', 'Direccion:') !!}<br>
                {!! Form::select('idDireccionImputado', $direcciones, null, ['class' => 'form-control']) !!}
            </div>
        </div>
        </div>
        {!! Form::close() !!}   
    <div class="row">
        <div class="col-md-2 col-xs-6">
            <div class="form-group">
             <button type="button" class="btn btn-primary add-proceso-imputado">Agregar Imputado</button>
            </div>
        </div>
        
        <div class="col-md-2 col-xs-6">
            <div class="form-group">
                <button type="button" data-href="/procesos/public/personas/createModal" class="btn btn-primary modal-persona" data-target="#myModal" data-toggle="modal"> Nueva Persona</button>
            </div>
        </div>
    </div>

        <div class="relation-proceso-imputado">
       @if ($action == 'editar')
                @foreach($selectedImputados as $imputado)
                    <div class="row row-proceso-imputado" data-imputado-id="{!! $imputado->id !!}">
                        <input type="hidden" name="imputados[]" value="{!! $imputado->id !!}">
                        <div class="col-sm-8 col-xs-8">
                        <div class="form-group">
                            {!! $imputado->nombre !!}
                        </div>
                        <div class="col-sm-2 col-xs-2 text-center">
                        <div class="form-group">
                            <i class="fa fa-times icon-red remove-proceso-imputado"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                @endforeach
        @endif
</div>
</div>
</div>
</div>
</div>