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
@elseif(session('role'))
    <div class="alert alert-info" role="alert">
        <li>{{session('role')}}</li>
    </div>
@endif

    {!! Form::open(["route"=>["role.store"],"method"=>"post", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
    {!! Form::token() !!}
    {!! Form::label("cargo", "Cargo", ["class"=>"label label-primary"]) !!}
    {!! Form::select("cargo", ["administrador"=>"Administrador","usuario"=>"Usuario","soporte"=>"Soporte"],/*"administrador"*/null, ["placeholder"=>"seleciona un cargo","class"=>"form-control"]) !!} <br>
    {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
    {!! link_to("role", "Regresar", ["class"=>"btn btn-success"]) !!}
    {!! Form::close() !!}
@endsection
