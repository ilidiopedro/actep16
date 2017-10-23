@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Autenticacao</div>

                <div class="panel-body">
                    <div class="col-md-10 col-md-offset-1">
                    <img src="/uplouds/user/{{$user->foto}}" style="height: 150px; width: 150px; float: left; border-radius: 200%; margin-left: 10px; margin-right: 7px;" alt="imagem do usuario">
                   <h2> {{$user->name}}'s profile</h2>

                   <form enctype="multipart/form-data" action="/profile" method="post">
                       <label>uploud imagem</label>
                       <input type="file" name="foto">
                       <input type="hidden" name="_token" value="{{csrf_token()}}">
                       <input type="submit" name="" class="pull-right btn btn-sm btn-primary">
                   </form>

                   <div class="form-group col-sm-12">
   
    <a href="{!! url('/home') !!}" class="btn btn-default">Cancel</a>
</div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
