<table class="table table-responsive" id="catEscolaridads-table">
    <thead>
        <th>Religion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($catEscolaridads as $catEscolaridad)
        <tr>
            <td>{!! $catEscolaridad->religion !!}</td>
            <td>
                {!! Form::open(['route' => ['catEscolaridads.destroy', $catEscolaridad->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catEscolaridads.show', [$catEscolaridad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catEscolaridads.edit', [$catEscolaridad->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>