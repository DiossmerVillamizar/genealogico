@extends('layouts.app')
@section('title')
@section('style')
<link rel="stylesheet" href="{{asset("css/app.css")}}">
    @parent
@endsection
@section('script-top')
    @parent
@endsection
@section('script-bottom')
    @parent
@endsection
@section('header')

@endsection
@section('sidebar')

@endsection
@section('footer')

@endsection
@section('content')
    <div class="cards">
        <div class="card-headers">
            Crear Nuevo Lapiz
        </div>
        <div class="card-bodys">
            {!! Form::open(["route"=>["lapiz.store"],"method"=>"post", "enctype"=>"multipart/form-data"]) !!}
            {!! Form::token() !!}
            {!! Form::label("color", "Color:") !!}
            {!! Form::text("color", null) !!} <br>
            {!! Form::label("marca", "Marca:") !!}
            {!! Form::text("marca", null) !!} <br>
            {!! Form::label("graduacion", "Graduación:") !!}
            {!! Form::text("graduacion", null) !!} <br>
            {!! Form::submit("Enviar", ["class"=>"btn btn-primary"]) !!}
            {!! Form::close() !!}
        </div>
        <div class="card-footers">
            <p>Todos los derechos reservado &#169; 2020</p>
        </div>
    </div>
@endsection
