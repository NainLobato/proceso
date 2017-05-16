<table class="table table-responsive" id="catEdoCivils-table">
    <thead>
        <th>Estado Civil</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($catEdoCivils as $catEdoCivil)
        <tr>
            <td>{!! $catEdoCivil->estadocivil !!}</td>
            <td>
                {!! Form::open(['route' => ['catEdoCivils.destroy', $catEdoCivil->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catEdoCivils.show', [$catEdoCivil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catEdoCivils.edit', [$catEdoCivil->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea eliminar el Registro?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>