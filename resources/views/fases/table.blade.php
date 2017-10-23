<table class="table table-responsive" id="fases-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Descricao</th>
        <th>Percentagem</th>
        <th>Data Inicio</th>
        <th>Data Fim</th>
        <th>Tratamentos Id</th>
        <th>Projectos Id</th>
        <th>Evolucoes Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($fases as $fase)
        <tr>
            <td>{!! $fase->nome !!}</td>
            <td>{!! $fase->descricao !!}</td>
            <td>{!! $fase->percentagem !!}</td>
            <td>{!! $fase->data_inicio !!}</td>
            <td>{!! $fase->data_fim !!}</td>
            <td>{!! $fase->tratamentos_id !!}</td>
            <td>{!! $fase->projectos_id !!}</td>
            <td>{!! $fase->evolucoes_id !!}</td>
            <td>
                {!! Form::open(['route' => ['fases.destroy', $fase->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('fases.show', [$fase->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('fases.edit', [$fase->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>