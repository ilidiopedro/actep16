@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Trabalhador
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="">
                <div class="">
                    {!! Form::open(['route' => 'trabalhadores.store','files' => true]) !!}
                      <div class="input-group">
                         <div class="col-md-12">
                        @include('trabalhadores.fields')
                       </div>


        <div class="input-group">
          <div class="col-md-12">
          <div class="box box-warning">
            <div class="box-header with-border">
              <h2 class="box-title">Aqui podes adicionar um user &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
               @include('trabalhadores.userfields')
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
                       
                        @include('trabalhadores.buttons')
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {!! Form::close() !!}
                </div>
            </div>

            
        </div>
    </div>
@endsection
