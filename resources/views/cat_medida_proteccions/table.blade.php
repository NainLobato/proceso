<table class="table table-responsive" id="catMedidaProteccions-table">
    <thead>
        <th>Medida de protección</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($catMedidaProteccions as $catMedidaProteccion)
        <tr>
            <td>{!! $catMedidaProteccion->medidaProteccion !!}</td>
            <td>
                {!! Form::open(['route' => ['catMedidaProteccions.destroy', $catMedidaProteccion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catMedidaProteccions.show', [$catMedidaProteccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catMedidaProteccions.edit', [$catMedidaProteccion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Esta seguro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>