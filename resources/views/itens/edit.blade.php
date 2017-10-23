@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Iten
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($iten, ['route' => ['itens.update', $iten->id], 'method' => 'patch']) !!}

                        @include('itens.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection