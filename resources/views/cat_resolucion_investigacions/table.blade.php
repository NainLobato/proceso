<table class="table table-responsive" id="catResolucionInvestigacions-table">
    <thead>
        <th>Resolución de Investigación</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($catResolucionInvestigacions as $catResolucionInvestigacion)
        <tr>
            <td>{!! $catResolucionInvestigacion->ResolucionInvestigacion !!}</td>
            <td>
                {!! Form::open(['route' => ['catResolucionInvestigacions.destroy', $catResolucionInvestigacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catResolucionInvestigacions.show', [$catResolucionInvestigacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catResolucionInvestigacions.edit', [$catResolucionInvestigacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>