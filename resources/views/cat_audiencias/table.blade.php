<table class="table table-responsive" id="catAudiencias-table">
    <thead>
        <th>Audiencia</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($catAudiencias as $catAudiencia)
        <tr>
            <td>{!! $catAudiencia->audiencia !!}</td>
            <td>
                {!! Form::open(['route' => ['catAudiencias.destroy', $catAudiencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catAudiencias.show', [$catAudiencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catAudiencias.edit', [$catAudiencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>