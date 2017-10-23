<table class="table table-responsive" id="infraestruturas-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Tipo Infraestrutura</th>
        <th>Foto</th>
        <th>Dimensoes</th>
        <th>Largura</th>
        <th>Comprimento</th>
        <th>Capacidade</th>
        <th>Clientes Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($infraestruturas as $infraestrutura)
        <tr>
            <td>{!! $infraestrutura->nome !!}</td>
            <td>{!! $infraestrutura->tipo_infraestrutura !!}</td>
            <td>{!! $infraestrutura->foto !!}</td>
            <td>{!! $infraestrutura->dimensoes !!}</td>
            <td>{!! $infraestrutura->largura !!}</td>
            <td>{!! $infraestrutura->comprimento !!}</td>
            <td>{!! $infraestrutura->capacidade !!}</td>
            <td>{!! $infraestrutura->clientes_id !!}</td>
            <td>
                {!! Form::open(['route' => ['infraestruturas.destroy', $infraestrutura->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('infraestruturas.show', [$infraestrutura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('infraestruturas.edit', [$infraestrutura->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>