<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Desctricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('desctricao', 'Desctricao:') !!}
    {!! Form::text('desctricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Duracao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duracao', 'Duracao:') !!}
    {!! Form::number('duracao', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_inicio', 'Data Inicio:') !!}
    {!! Form::date('data_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Fim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_fim', 'Data Fim:') !!}
    {!! Form::date('data_fim', null, ['class' => 'form-control']) !!}
</div>

<!-- Produtos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('produtos_id', 'Produtos Id:') !!}
    {!! Form::number('produtos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Infraestruturas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('infraestruturas_id', 'Infraestruturas Id:') !!}
    {!! Form::number('infraestruturas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('projectos.index') !!}" class="btn btn-default">Cancel</a>
</div>
