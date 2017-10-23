<table class="table d-sm-table table-responsive" id="clientes-table">
    <thead>
        <tr>
            <th>Foto</th>
            <th>Nome</th>
            <th>Endereco</th>
        <th>Nuit</th>
        <th>Telefone</th>
        
        
        <th>Tipo Cliente</th>
        
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr><td>
            <img src="/uplouds/cliente/{!! $cliente->foto !!}"  class="user-image" alt="Cliente Image" style="width: 50px; height: 50px; border-radius: 20%;"></td>
            <td>{!! $cliente->nome !!}</td>
            <td>{!! $cliente->endereco !!}</td>
            <td>{!! $cliente->nuit !!}</td>
            <td>{!! $cliente->telefone !!}</td>
            <td>{!! $cliente->tipo_cliente !!}</td>
            <td>
                {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
               
                    <a href="{!! route('clientes.show', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> |
                    <a href="{!! route('clientes.edit', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> |
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
               
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>