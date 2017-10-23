<!-- Users Fields -->

<div class="form-group col-sm-6">
    {!! Form::label('name', 'User name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('email', 'User email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('password', 'User password:') !!}
    {!! Form::password('password', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', 'User password comfirm:') !!}
    {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
</div>
