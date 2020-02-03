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
            Dashboard
        </div>
        <div class="card-bodys">
            <table border="2" cellpadding="3" cellspacing="3">
                <figcaption> Lapiz  {!! link_to_route("lapiz.create", "Nuevo", null, ['class'=>"btn btn-primary"]) !!}</figcaption>
                <thead>
                    <tr valing="middle" aling="center">
                        <th>Color</th>
                        <th>Marca</th>
                        <th>Graduación</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lapiz as $lapizs)
                    <tr valing="middle" aling="center">
                    <td>{{$lapizs->color}}</td>
                    <td>{{$lapizs->marca}}</td>
                    <td>{{$lapizs->graduacion}}</td>
                    <td>
                        {!! Form::open(["route"=>["lapiz.destroy",$lapizs->id],"method"=>"delete"]) !!}
                        {!! link_to_route("lapiz.edit", "Editar", $lapizs->id, ["class"=>"btn btn-primary"]) !!}
                        {!! link_to_route("lapiz.show", "Mostrar", $lapizs->id, ["class"=>"btn btn-success"]) !!}
                        {!! Form::submit("Eliminar",["class"=>"btn btn-danger"]) !!}
                        {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                </tbody>
                <caption>{!! link_to("/", "Index", ["class"=>"btn btn-primary"]) !!}</caption>
            </table>
        </div>
        <div class="card-footers">
            <p>Todos los derechos reservado &#169; 2020</p>
        </div>
    </div>
@endsection
