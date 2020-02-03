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
            {!! Form::open(["route"=>["lapiz.update",$lapiz->id],"method"=>"Put", "enctype"=>"multipart/form-data"]) !!}
            {!! Form::token() !!}
            {!! Form::label("color", "Color:") !!}
            {!! Form::text("color", $lapiz->color) !!} <br>
            {!! Form::label("marca", "Marca:") !!}
            {!! Form::text("marca", $lapiz->marca) !!} <br>
            {!! Form::label("graduacion", "Graduación:") !!}
            {!! Form::text("graduacion", $lapiz->graduacion) !!} <br>
            {!! Form::submit("Actualizar",["class"=>"btn btn-primary"]) !!}
            {!! Form::close() !!}
        </div>
        <div class="card-footers">
            <p>Todos los derechos reservado &#169; 2020</p>
        </div>
    </div>
@endsection
