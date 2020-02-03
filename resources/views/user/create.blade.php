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
@elseif(session('usuario'))
    <div class="alert alert-info" role="alert">
        <li>{{session('usuario')}}</li>
    </div>
@endif

    {!! Form::open(["route"=>["user.store"],"method"=>"post", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
    {!! Form::token() !!}
    {!! Form::label("name", "Name", ["class"=>"label label-primary"]) !!}
    {!! Form::text("name", null, ["class"=>"form-control"]) !!}
    {!! Form::label("email", "Email Address", ["class"=>"label label-primary"]) !!}
    {!! Form::email("email", null, ["class"=>"form-control"]) !!}
    {!! Form::label("password", "Password", ["class"=>"label label-primary"]) !!}
    {!! Form::password("password", ["class"=>"form-control"],null) !!}
    {!! Form::label("passwordR", "Repeat Password", ["class"=>"label label-primary"]) !!}
    {!! Form::password("passwordR", ["class"=>"form-control"]) !!} <br>
    {!! Form::submit("Registrar", ["class"=>"btn btn-primary"]) !!}
    {!! link_to("user", "Regresar", ["class"=>"btn btn-success"]) !!}
    {!! Form::close() !!}
@endsection
