<table class="table table-responsive" id="catMedidaCautelars-table">
    <thead>
        <th>Medidacautelar</th>
        <th colspan="3">Acciones</th>
    </thead>
    <tbody>
    @foreach($catMedidaCautelars as $catMedidaCautelar)
        <tr>
            <td>{!! $catMedidaCautelar->medidaCautelar !!}</td>
            <td>
                {!! Form::open(['route' => ['catMedidaCautelars.destroy', $catMedidaCautelar->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catMedidaCautelars.show', [$catMedidaCautelar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catMedidaCautelars.edit', [$catMedidaCautelar->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>