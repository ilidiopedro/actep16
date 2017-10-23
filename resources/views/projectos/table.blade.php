<table class="table table-responsive" id="projectos-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Desctricao</th>
        <th>Duracao</th>
        <th>Data Inicio</th>
        <th>Data Fim</th>
        <th>Produtos Id</th>
        <th>Infraestruturas Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($projectos as $projecto)
        <tr>
            <td>{!! $projecto->nome !!}</td>
            <td>{!! $projecto->desctricao !!}</td>
            <td>{!! $projecto->duracao !!}</td>
            <td>{!! $projecto->data_inicio !!}</td>
            <td>{!! $projecto->data_fim !!}</td>
            <td>{!! $projecto->produtos_id !!}</td>
            <td>{!! $projecto->infraestruturas_id !!}</td>
            <td>
                {!! Form::open(['route' => ['projectos.destroy', $projecto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('projectos.show', [$projecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('projectos.edit', [$projecto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>