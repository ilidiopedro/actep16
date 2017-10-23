<table class="table table-responsive" id="trabalhadores-table">
    <thead>
        <tr>
        <th>Foto</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Data Nascimento</th>
        <th>Telefone</th>
        <th>Endereco</th>
         <th colspan="3">Accao</th>
        </tr>
    </thead>
    <tbody>
    @foreach($trabalhadores as $trabalhadore)
        <tr>
            <td><img src="/uplouds/employee/{!! $trabalhadore->foto !!}"  class="user-image" alt="Employee Image" style="width: 50px; height: 50px; border-radius: 20%;"></td>
            <td>{!! $trabalhadore->nome !!}</td>
            <td>{!! $trabalhadore->sexo !!}</td>
            <td>{!! $trabalhadore->data_nascimento !!}</td>
            <td>{!! $trabalhadore->telefone !!}</td>
            <td>{!! $trabalhadore->endereco !!}</td>
            <td>
                {!! Form::open(['route' => ['trabalhadores.destroy', $trabalhadore->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('trabalhadores.show', [$trabalhadore->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('trabalhadores.edit', [$trabalhadore->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>