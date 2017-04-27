<table class="table table-responsive" id="catEtnias-table">
    <thead>
        <th>Etnia</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($catEtnias as $catEtnia)
        <tr>
            <td>{!! $catEtnia->etnia !!}</td>
            <td>
                {!! Form::open(['route' => ['catEtnias.destroy', $catEtnia->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catEtnias.show', [$catEtnia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catEtnias.edit', [$catEtnia->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>