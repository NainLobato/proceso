<table class="table table-responsive" id="catMedidas-table">
    <thead>
        <th>Medida Cautelar</th>
        <th>Tipo Medida</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($catMedidas as $catMedida)
        <tr>
            <td>{!! $catMedida->Medida !!}</td>
            <td>{!! $catMedida->IdTipoMedida !!}</td>
            <td>
                {!! Form::open(['route' => ['catMedidas.destroy', $catMedida->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catMedidas.show', [$catMedida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catMedidas.edit', [$catMedida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>