<table class="table table-responsive" id="catReligions-table">
    <thead>
        <th>Religion</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($catReligions as $catReligion)
        <tr>
            <td>{!! $catReligion->religion !!}</td>
            <td>
                {!! Form::open(['route' => ['catReligions.destroy', $catReligion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catReligions.show', [$catReligion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catReligions.edit', [$catReligion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>