<table class="table table-responsive" id="catTipoMedidas-table">
    <thead>
        <th>Tipomedida</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($catTipoMedidas as $catTipoMedida)
        <tr>
            <td>{!! $catTipoMedida->Tipomedida !!}</td>
            <td>
                {!! Form::open(['route' => ['catTipoMedidas.destroy', $catTipoMedida->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catTipoMedidas.show', [$catTipoMedida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catTipoMedidas.edit', [$catTipoMedida->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>