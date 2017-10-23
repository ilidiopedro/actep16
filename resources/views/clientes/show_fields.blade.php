<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $cliente->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('nome', 'Nome:') !!}
    {!! $cliente->nome !!}</p>
</div>

<!-- Nuit Field -->
<div class="form-group">
    {!! Form::label('nuit', 'Nuit:') !!}
    <p>{!! $cliente->nuit !!}</p>
</div>

<!-- Telefone Field -->
<div class="form-group">
    {!! Form::label('telefone', 'Telefone:') !!}
    <p>{!! $cliente->telefone !!}</p>
</div>

<!-- Endereco Field -->
<div class="form-group">
    {!! Form::label('endereco', 'Endereco:') !!}
    <p>{!! $cliente->endereco !!}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{!! $cliente->foto !!}</p>
</div>

<!-- Tipo Cliente Field -->
<div class="form-group">
    {!! Form::label('tipo_cliente', 'Tipo Cliente:') !!}
    <p>{!! $cliente->tipo_cliente !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $cliente->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $cliente->updated_at !!}</p>
</div>

<!-- Deleted At Field -->
<div class="form-group">
    {!! Form::label('deleted_at', 'Deleted At:') !!}
    <p>{!! $cliente->deleted_at !!}</p>
</div>

<!-- Users Id Field -->
<div class="form-group">
    {!! Form::label('name', 'User name:') !!}
     <p>{!! $user->name !!}</p>
</div>

<div class="form-group">
    {!! Form::label('email', 'User email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<div class="form-group">
    {!! Form::label('password', 'User password:') !!}
    <p>{!! $user->password !!}</p>
</div>

