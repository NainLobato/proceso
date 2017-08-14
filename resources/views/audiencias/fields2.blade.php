<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" data-toggle="tooltip" title="Ocultar datos" href="#divAudiencias">Audiencias</a>
        </h3> 
    </div> 
    
    <div id="divAudiencias" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">

    {!! Form::open(['id' => 'frmAudiencias']) !!}
    <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-4">
             <div class="form-group">
                {!! Form::label('idTipoAudiencia', 'TIpo de Audiencia:') !!}<br>
                {!! Form::select('idTipoAudiencia',  $audiencias, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
             <div class="form-group">
                {!! Form::label('idJuez', 'Juez de Audiencia:') !!}<br>
                {!! Form::select('idJuez',  $jueces, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
        
        <div class="col-xs-12 col-md-6 col-lg-4">
             <div class="form-group">
                {!! Form::label('idFiscal', 'Fiscal de Audiencia:') !!}<br>
                {!! Form::select('idFiscal',  $fiscales, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
    
        <div class="col-xs-12 col-md-6 col-lg-4">
             <div class="form-group">
                {!! Form::label('resolucion', 'Resolucion:') !!}<br>
                {!! Form::textarea('resolucion', null, ['rows'=>'2', 'class' => 'form-control']) !!}
            </div>
        </div>
        <div class="clearfix visible-md"></div>

        <div class="col-xs-12 col-md-6 col-lg-4">
             <div class="form-group">
                {!! Form::label('idEtapa', 'Etapa:') !!}<br>
                {!! Form::select('idEtapa',  $etapas, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
        <!-- Observaciones Field -->
        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="form-group">
                {!! Form::label('idImputacion', 'Imputacion:') !!}
                {!! Form::select('idImputacion', $imputaciones2, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
        <div class="clearfix visible-lg"></div>
        <!-- Submit Field -->
        <div class="form-group col-xs-6">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
</div>
</div>