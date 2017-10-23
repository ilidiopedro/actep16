@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Projecto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($projecto, ['route' => ['projectos.update', $projecto->id], 'method' => 'patch']) !!}

                        @include('projectos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection