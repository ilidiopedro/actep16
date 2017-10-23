<!-- Tamano In Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tamano_in', 'Tamano In:') !!}
    {!! Form::number('tamano_in', null, ['class' => 'form-control']) !!}
</div>

<!-- Tamanho Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tamanho_fin', 'Tamanho Fin:') !!}
    {!! Form::number('tamanho_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Avaliacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_avaliacao', 'Data Avaliacao:') !!}
    {!! Form::date('data_avaliacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricao', 'Descricao:') !!}
    {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('evolucaos.index') !!}" class="btn btn-default">Cancel</a>
</div>
