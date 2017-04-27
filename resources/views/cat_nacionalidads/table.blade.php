<table class="table table-responsive" id="catNacionalidads-table">
    <thead>
        <th>Nacionalidad</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($catNacionalidads as $catNacionalidad)
        <tr>
            <td>{!! $catNacionalidad->nacionalidad !!}</td>
            <td>
                {!! Form::open(['route' => ['catNacionalidads.destroy', $catNacionalidad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catNacionalidads.show', [$catNacionalidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catNacionalidads.edit', [$catNacionalidad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>