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
                <figcaption> Papel  {!! link_to_route("papel.create", "Nuevo", null, ['class'=>"btn btn-primary"]) !!}</figcaption>
                <thead>
                    <tr valing="middle" aling="center">
                        <th>Formato</th>
                        <th>Marca</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($papel as $papels)
                    <tr valing="middle" aling="center">
                    <td>{{$papels->formato}}</td>
                    <td>{{$papels->lapiz_id}}</td>
                    <td>
                        {!! Form::open(["route"=>["papel.destroy",$papels->id],"method"=>"delete"]) !!}
                        {!! link_to_route("papel.edit", "Editar", $papels->id, ["class"=>"btn btn-primary"]) !!}
                        {!! link_to_route("papel.show", "Mostrar", $papels->id, ["class"=>"btn btn-success"]) !!}
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
