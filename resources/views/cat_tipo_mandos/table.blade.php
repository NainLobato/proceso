<table class="table table-responsive" id="catTipoMandos-table">
    <thead>
        <th>Mandamiento</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($catTipoMandos as $catTipoMando)
        <tr>
            <td>{!! $catTipoMando->mandamiento !!}</td>
            <td>
                {!! Form::open(['route' => ['catTipoMandos.destroy', $catTipoMando->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catTipoMandos.show', [$catTipoMando->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catTipoMandos.edit', [$catTipoMando->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>