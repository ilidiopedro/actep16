<table class="table table-responsive" id="itens-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Descricao</th>
        <th>Quantidade</th>
        <th>Foto</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($itens as $iten)
        <tr>
            <td>{!! $iten->nome !!}</td>
            <td>{!! $iten->descricao !!}</td>
            <td>{!! $iten->quantidade !!}</td>
            <td>{!! $iten->foto !!}</td>
            <td>
                {!! Form::open(['route' => ['itens.destroy', $iten->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('itens.show', [$iten->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('itens.edit', [$iten->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>