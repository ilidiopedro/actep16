<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Nuit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nuit', 'Nuit:') !!}
    {!! Form::number('nuit', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::number('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('endereco', 'Endereco:') !!}
    {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto do cliente:') !!}
    {!! Form::file('foto', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Cliente Field -->

<div class="form-group col-sm-6">
{!! Form::label('tipo_cliente', 'Tipo Cliente:') !!}                                                        
        <select id="tipo_cliente" class="form-control" name="tipo_cliente">
            <option value="Avicultor">Avicultor</option>
            <option value="Agricultor">Agricultor</option>
        </select>        
</div>



