@extends('layout.app')
@section('title','Registrar')
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

    {!! Form::open(["route"=>["roleuser.store"],"method"=>"post", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
    {!! Form::token() !!}
    {!! Form::label("user_id", "Nombre", ["class"=>"label label-primary"]) !!}
    {!! Form::select("user_id", $usuario,null, ["placeholder"=>"seleciona un cargo","class"=>"form-control"]) !!}
    {!! Form::label("role_id", "Cargo", ["class"=>"label label-primary"]) !!}
    {!! Form::select("role_id", $role,null, ["placeholder"=>"seleciona un cargo","class"=>"form-control"]) !!} <br>
    {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
    {!! link_to("roleuser", "Regresar", ["class"=>"btn btn-success"]) !!}
    {!! Form::close() !!}
@endsection
