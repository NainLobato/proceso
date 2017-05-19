<table class="table table-responsive" id="catSentencias-table">
    <thead>
        <th>Sentencia</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($catSentencias as $catSentencia)
        <tr>
            <td>{!! $catSentencia->sentencia !!}</td>
            <td>
                {!! Form::open(['route' => ['catSentencias.destroy', $catSentencia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catSentencias.show', [$catSentencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catSentencias.edit', [$catSentencia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>