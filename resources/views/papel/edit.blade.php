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
            Crear Nuevo Papel
        </div>
        <div class="card-bodys">
            {!! Form::open(["route"=>["papel.update",$papel->id],"method"=>"put","autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
            {!! Form::token() !!}
            {!! Form::label("formato", "formato:") !!}
            {!! Form::text("formato",$papel->formato,) !!} <br>
            {!! Form::label("lapiz_id", "Marca:") !!}
            {!! Form::select("lapiz_id", $lapiz->pluck('marca','id')) !!} <br>
            {!! Form::submit("Actualizar",["class"=>"btn btn-primary"]) !!}
            {!! Form::close() !!}
        </div>
        <div class="card-footers">
            <p>Todos los derechos reservado &#169; 2020</p>
        </div>
    </div>
@endsection
