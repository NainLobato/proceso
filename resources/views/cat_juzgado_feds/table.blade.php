<table class="table table-responsive" id="catJuzgadoFeds-table">
    <thead>
        <th>Juzgado Federal</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($catJuzgadoFeds as $catJuzgadoFed)
        <tr>
            <td>{!! $catJuzgadoFed->jusgadofederal !!}</td>
            <td>
                {!! Form::open(['route' => ['catJuzgadoFeds.destroy', $catJuzgadoFed->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catJuzgadoFeds.show', [$catJuzgadoFed->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catJuzgadoFeds.edit', [$catJuzgadoFed->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>