<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" data-toggle="tooltip" title="Ocultar datos" href="#divAudiencias">Audiencias</a>
        </h3> 
    </div> 
    
    <div id="divAudiencias" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    <div class="row">

               {!! Form::open(['id' => 'frmAudiencias']) !!}
        <div class="col-md-3 col-xs-10">
             <div class="form-group">
                {!! Form::label('idTipoAudiencia', 'TIpo de Audiencia:') !!}<br>
                {!! Form::select('idTipoAudiencia',  $audiencias, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-3 col-xs-10">
             <div class="form-group">
                {!! Form::label('idJuez', 'Juez de Audiencia:') !!}<br>
                {!! Form::select('idJuez',  $jueces, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
        
        <div class="col-md-3 col-xs-10">
             <div class="form-group">
                {!! Form::label('idFiscal', 'Fiscal de Audiencia:') !!}<br>
                {!! Form::select('idFiscal',  $fiscales, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
</div>
 <div class="row">
         <div class="col-md-3 col-xs-10">
             <div class="form-group">
                {!! Form::label('resolucion', 'Resolucion:') !!}<br>
                {!! Form::textarea('resolucion', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="col-md-3 col-xs-10">
             <div class="form-group">
                {!! Form::label('idEtapa', 'Etapa:') !!}<br>
                {!! Form::select('idEtapa',  $etapas, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
<!-- Observaciones Field -->
 <div class="col-md-5 col-xs-10">
             <div class="form-group">
    {!! Form::label('idImputacion', 'Imputacion:') !!}
    {!! Form::select('idImputacion', $imputaciones2, null,  ['placeholder' => 'Seleccionar...','class' => 'form-control']) !!}
            </div>
        </div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
</div>
</div>
</div>
</div>