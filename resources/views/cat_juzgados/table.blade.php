<table class="table table-responsive" id="catJuzgados-table">
    <thead>
        <th>Juzgado</th>
        <th>Distrito</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($catJuzgados as $catJuzgado)
        <tr>
            <td>{!! $catJuzgado->juzgado !!}</td>
            <td>{!! $catJuzgado->distrito !!}</td>
            <td>
                {!! Form::open(['route' => ['catJuzgados.destroy', $catJuzgado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catJuzgados.show', [$catJuzgado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catJuzgados.edit', [$catJuzgado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>