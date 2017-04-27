<table class="table table-responsive" id="personas-table">
    <thead>
        <th>Nombre</th>
        <th>Paterno</th>
        <th>Materno</th>
        <th>Alias</th>
        <th>Fechanacimiento</th>
        <th>Sexo</th>
        <th>Idetnia</th>
        <th>Idescolaridad</th>
        <th>Padre</th>
        <th>Idreligion</th>
        <th>Ine</th>
        <th>Rfc</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($personas as $persona)
        <tr>
            <td>{!! $persona->nombre !!}</td>
            <td>{!! $persona->paterno !!}</td>
            <td>{!! $persona->materno !!}</td>
            <td>{!! $persona->alias !!}</td>
            <td>{!! $persona->fechaNacimiento !!}</td>
            <td>{!! $persona->sexo !!}</td>
            <td>{!! $persona->idEtnia !!}</td>
            <td>{!! $persona->idEscolaridad !!}</td>
            <td>{!! $persona->padre !!}</td>
            <td>{!! $persona->idReligion !!}</td>
            <td>{!! $persona->ine !!}</td>
            <td>{!! $persona->rfc !!}</td>
            <td>
                {!! Form::open(['route' => ['personas.destroy', $persona->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('personas.show', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('personas.edit', [$persona->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>