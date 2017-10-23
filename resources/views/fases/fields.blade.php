<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Percentagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('percentagem', 'Percentagem:') !!}
    {!! Form::number('percentagem', null, ['class' => 'form-control']) !!}
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

<!-- Tratamentos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tratamentos_id', 'Tratamentos Id:') !!}
    {!! Form::number('tratamentos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Projectos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('projectos_id', 'Projectos Id:') !!}
    {!! Form::number('projectos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Evolucoes Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('evolucoes_id', 'Evolucoes Id:') !!}
    {!! Form::number('evolucoes_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('fases.index') !!}" class="btn btn-default">Cancel</a>
</div>
