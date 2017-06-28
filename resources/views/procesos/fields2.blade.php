<style type="text/css">
.panel-default > .panel-heading-custom {
    background: #BDBDBD; color: #000000;
}
</style>

<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom">
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" data-toggle="tooltip" title="Ocultar datos" href="#collapse1">Datos de la Carpeta de Investigación</a>
        </h3>
    </div>

    <div id="collapse1" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    <div class="row">
        <div class="col-md-2 col-xs-6">
            <div class="form-group">
                {!! Form::label('anioCarpeta', 'AÑO:') !!}*
                {!! Form::number('anioCarpeta', null, ['class' => 'form-control','required'=>'','data-error'=>'Error al colocar el año']) !!}
            </div>
        </div>

        <div class="col-md-2 col-xs-6">
            <div class="form-group">
                {!! Form::label('numeroCarpeta', 'NUMERO:') !!}*
                {!! Form::text('numeroCarpeta', null, ['class' => 'form-control','required'=>'','data-error'=>'Error en UIPJ']) !!}
           </div>
        </div>

        <div class="col-md-3 col-xs-11">
            <div class="form-group">
                {!! Form::label('idUIPJ', 'UIPJ:') !!}*
                {!! Form::select('idUIPJ', $unidades, null, ['placeholder' => 'Seleccionar...','class' => 'form-control','required'=>'','data-error'=>'Error en UIPJ']) !!}
           </div>
        </div>

        <div class="col-md-3 col-xs-11">
            <div class="form-group">
             {!! Form::label('idFiscal', 'FISCAL') !!}*
             {!! Form::select('idFiscal', $fiscales, 'null', ['placeholder' => 'Seleccionar...','class' => 'form-control','required'=>'']) !!}
            </div>
        </div>

        <div class="col-md-2 col-xs-8">
            <div class="form-group">
                {!! Form::label('fechaInicioCarpeta', 'FECHA INICIO:') !!}*
                {!! Form::date('fechaInicioCarpeta', null, ['class' => 'form-control','required'=>'']) !!}
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>

<div class="panel panel-default" > 
    <div class="panel-heading panel-heading-custom"> 
        <h3 class="panel-title" align="center">
            <a data-toggle="collapse" href="#collapse2">Radicación del Proceso Penal</a>
        </h3> 
    </div> 
    <div id="collapse2" class="panel-collapse collapse in">
    <div class="box box-default">
    <div class="box-body">
    <div class="row">
        <div class="col-md-2 col-xs-6">
            <div class="form-group">
                {!! Form::label('anioProceso', 'AÑO:') !!}*
                {!! Form::number('anioProceso', null, ['class' => 'form-control','required'=>'']) !!}
            </div>
        </div>
        <div class="col-md-2 col-xs-6">
            <div class="form-group">
                {!! Form::label('numeroProceso', 'NUMERO:') !!}*
                {!! Form::text('numeroProceso', null, ['class' => 'form-control','required'=>'']) !!}  
            </div>
        </div>
        <div class="col-md-3 col-xs-10">
            <div class="form-group">
                {!! Form::label('Juzgado', 'JUZGADO:') !!}*
                {!! Form::select('idJuzgado', $juzgados, null, ['placeholder' => 'Seleccionar...','id'=>'idJuzgado','class' => 'form-control','required'=>'']) !!}
            </div>
        </div>

        <div class="col-md-3 col-xs-10">
            <div class="form-group">
            {!! Form::label('idJuez', 'JUEZ:') !!}*
            {!! Form::select('idJuez', $jueces, null, ['placeholder' => 'Seleccionar...','id'=>'idJuez','class' => 'form-control','required'=>'']) !!}
            </div>
        </div>


        <div class="col-md-2 col-xs-8">
            <div class="form-group">
            {!! Form::label('fechaRadicacion', 'FECHA RADICACION:') !!}*
            {!! Form::date('fechaRadicacion', null, ['class' => 'form-control','required'=>'']) !!}
             </div>
        </div>
    </div>
<div class="row">

       <div class="col-md-5 col-xs-12">
            <div class="form-group">
            {!! Form::label('observaciones', 'OBSERVACIONES:') !!}
            {!! Form::textarea('observaciones', null, ['rows'=>'4','class' => 'form-control']) !!}
             </div>
        </div>
        <div class="col-md-2 col-xs-5">
            <div class="form-group">
                  {!! Form::label('conDetenido', '¿CON DETENIDO?:') !!}<br>
                {!! Form::hidden('conDetenido', false) !!}
                {!! Form::checkbox('conDetenido', '1', null) !!} 
            </div>
        </div>
        <div class="col-md-3 col-xs-6">
            <div class="form-group">
                  {!! Form::label('obsequiaOrden', '¿ORDEN OBSEQUIADA?:') !!}<br>
                {!! Form::hidden('obsequiaOrden', false) !!}
                {!! Form::checkbox('obsequiaOrden', '1', null) !!} 
          </div>
        </div>
        <div class="col-md-2 col-xs-8">
            <div class="form-group">
              {!! Form::label('fechaOrden', 'FECHA ORDEN:') !!}
               {!! Form::date('fechaOrden', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    
    <div class="row">
            <div class="col-md-2 col-xs-6">
                <div class="form-group">
                    @if($action=='crear')
                        {!! Form::submit('Guardar', ['id'=>'submitProceso' ,'class' => 'btn btn-primary']) !!}
                    @else
                        {!! Form::button('Actualizar', ['id'=>'updateProceso' ,'class' => 'btn btn-primary']) !!}
                    @endif

                    {!! Form::hidden('idProceso', $idProceso, ['id'=>'idProceso','class' => 'form-control']) !!}              
                </div>
            </div>
            <div class="col-md-2 col-xs-6">
                <div class="form-group">
                  <a href="{!! route('procesos.index') !!}" class="btn btn-default">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div id="ajaxResponse">
    </div>
        <!-- Submit Field -->
<script>

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

</script>