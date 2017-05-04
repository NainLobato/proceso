<table class="table table-responsive" id="catResolucionAmparos-table">
    <thead>
        <th>Resolucionamparo</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($catResolucionAmparos as $catResolucionAmparo)
        <tr>
            <td>{!! $catResolucionAmparo->resolucionAmparo !!}</td>
            <td>
                {!! Form::open(['route' => ['catResolucionAmparos.destroy', $catResolucionAmparo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('catResolucionAmparos.show', [$catResolucionAmparo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('catResolucionAmparos.edit', [$catResolucionAmparo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>