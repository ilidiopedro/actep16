@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cliente
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'clientes.store','files' => true]) !!}


                        @include('clientes.fields')
                         @include('clientes.userfilds')
                        @include('clientes.buttons')
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
