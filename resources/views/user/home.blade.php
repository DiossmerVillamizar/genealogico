@extends('layout.app')
@section('title','Usuario')
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
MANY TO MANY
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

<table class="table table-hover">
    <figcaption class="bold center">Usuario {!! link_to_route("user.create", "Nuevo", null,["class"=>"btn btn-primary"]) !!}</figcaption>
    <thead>
        <tr valign="middle" align="center">
            <th>Nombre</th>
            <th>Correo</th>
            <th>Password</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuario as $usuarios)
        <tr valign="middle" align="center">
            <td>{{$usuarios->name}}</td>
            <td>{{$usuarios->email}}</td>
            <td>{{$usuarios->password}}</td>
            <td>
                {!! Form::open(["route"=>["user.destroy",$usuarios->id],"method"=>"delete", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
                {!! link_to_route("user.edit", "Editar", $usuarios->id, ["class"=>"btn btn-success"]) !!}
                {!! link_to_route("user.show", "Mostrar", $usuarios->id, ["class"=>"btn btn-warning"]) !!}
                {!! Form::submit("Eliminar", ["class"=>"btn btn-danger"]) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
