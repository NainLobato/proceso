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
        <div class="col-xs-12 col-md-6 col-lg-4">
             <div class="form-group">
                {!! Form::label('idImputado', 'Nombre Imputado:') !!}<br>
                {!! Form::select('idImputado', array(), null, ['class' => 'form-control']) !!}
             </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-2">
             <div class="form-group">
                {!! Form::label('esDetenido', '¿Detenido?') !!}
                <br>
                {!! Form::checkbox('esDetenido', null, null) !!} 
            </div>
        </div>
        <div class="clearfix visible-md"></div>

       <div class="col-xs-12 col-md-6 col-lg-3">
             <div class="form-group">
                {!! Form::label('FechaDetencion', 'Fecha Detención') !!}<br>
                <div class='input-group date calendarioCompleto'>
                    {!! Form::text('fechaDetencionImputado', null, ['id'=>'fechaDetencionImputado', 'class' => 'form-control','required'=>'', 'placeholder' => 'DD/MM/AAAA']) !!}
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
            <div class="form-group">
                {!! Form::label('idDireccion', 'Direccion:') !!}<br>
                {!! Form::select('idDireccionImputado', $direcciones, null, ['class' => 'form-control']) !!}
            </div>
        </div>
        {!! Form::close() !!}   
    </div>

    <div class="row">
        <div class="col-xs-6 col-md-3">
            <div class="form-group">
             <button type="button" class="btn btn-primary add-proceso-imputado">Agregar Imputado</button>
            </div>
        </div>
        
        <div class="col-xs-6 col-md-3 ">
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
                        <div class="col-xs-10">
                            <div class="form-group"><i class="fa fa-user-secret fa-2x" aria-hidden="true"></i>
                                {!! $imputado->nombre !!}
                            </div>
                        </div>
                        <div class="col-xs-1 text-center">
                            <div class="form-group">
                                <i class="fa fa-times icon-red remove-proceso-imputado"></i>
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