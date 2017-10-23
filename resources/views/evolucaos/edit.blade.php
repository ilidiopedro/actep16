@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Evolucao
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($evolucao, ['route' => ['evolucaos.update', $evolucao->id], 'method' => 'patch']) !!}

                        @include('evolucaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection