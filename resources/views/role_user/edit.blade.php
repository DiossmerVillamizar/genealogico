@extends('layout.app')
@section('title','Actualizar')
@section('css')

@parent
@endsection
@section('script-top')

@parent
@endsection
@section('script-foot')

@parent
@endsection
@section('header')

@endsection
@section('aside')
@include('include.aside')
@endsection
@section('footer')

@endsection
@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@elseif(session('roleuser'))
    <div class="alert alert-info" role="alert">
        <li>{{session('roleuser')}}</li>
    </div>
@endif

{!! Form::open(["route"=>["roleuser.update",$roleuser->id],"method"=>"put", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
    {!! Form::token() !!}
    {!! Form::label("user_id", "Nombre", ["class"=>"label label-primary"]) !!}
    {!! Form::select("user_id", $usuario,null, ["placeholder"=>"seleciona un cargo","class"=>"form-control"]) !!}
    {!! Form::label("role_id", "Cargo", ["class"=>"label label-primary"]) !!}
    {!! Form::select("role_id", $role,null, ["placeholder"=>"seleciona un cargo","class"=>"form-control"]) !!} <br>
    {!! Form::submit("Actualizar", ["class"=>"btn btn-primary"]) !!}
    {!! link_to("roleuser", "Regresar", ["class"=>"btn btn-success"]) !!}
    {!! Form::close() !!}
@endsection
