<table class="table table-responsive" id="catDelitos-table">
    <thead>
        <th>Delito</th>
        <th>Id Agrupacion</th>
        <th>Número del Delito</th>
        <th>Orden</th>
        <th>Activo</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($catDelitos as $catDelito)
        <tr>
            <td>{!! $catDelito->delito !!}</td>
            <td>{!! $catDelito->idAgrupacion !!}</td>
            <td>{!! $catDelito->ndelnum !!}</td>
            <td>{!! $catDelito->orden !!}</td>
            <td>{!! $catDelito->activo !!}</td>
            <td>
                {!! Form::open(['route' => ['catDelitos.destroy', $catDelito->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catDelitos.show', [$catDelito->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catDelitos.edit', [$catDelito->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>