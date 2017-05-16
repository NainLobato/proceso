<table class="table table-responsive" id="catEtapas-table">
    <thead>
        <th>Etapa Procesal</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($catEtapas as $catEtapa)
        <tr>
            <td>{!! $catEtapa->etapa !!}</td>
            <td>
                {!! Form::open(['route' => ['catEtapas.destroy', $catEtapa->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catEtapas.show', [$catEtapa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catEtapas.edit', [$catEtapa->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>