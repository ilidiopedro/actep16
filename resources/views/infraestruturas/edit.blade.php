@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Infraestrutura
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($infraestrutura, ['route' => ['infraestruturas.update', $infraestrutura->id], 'method' => 'patch']) !!}

                        @include('infraestruturas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection