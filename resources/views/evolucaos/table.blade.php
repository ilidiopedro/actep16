<table class="table table-responsive" id="evolucaos-table">
    <thead>
        <tr>
            <th>Tamano In</th>
        <th>Tamanho Fin</th>
        <th>Data Avaliacao</th>
        <th>Descricao</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($evolucaos as $evolucao)
        <tr>
            <td>{!! $evolucao->tamano_in !!}</td>
            <td>{!! $evolucao->tamanho_fin !!}</td>
            <td>{!! $evolucao->data_avaliacao !!}</td>
            <td>{!! $evolucao->descricao !!}</td>
            <td>
                {!! Form::open(['route' => ['evolucaos.destroy', $evolucao->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('evolucaos.show', [$evolucao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('evolucaos.edit', [$evolucao->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>