{!! Form::open(['route' => ['procesos.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('procesos.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('procesos.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
<!-- if is superuser

    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Estás seguro de confirmar?')"
    ]) !!}
-->
</div>
{!! Form::close() !!}
