@extends('layout.app')
@section('title','roleuser')
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
@elseif(session('roleuser'))
    <div class="alert alert-info" role="alert">
        <li>{{session('roleuser')}}</li>
    </div>
@endif

<table class="table table-hover">
    <figcaption class="bold center">Role_User {!! link_to_route("roleuser.create", "Nuevo", null,["class"=>"btn btn-primary"]) !!}</figcaption>
    <thead>
        <tr valign="middle" align="center">
            <th>Cargo</th>
            <th>Roles</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roleuser as $roleusers)
        <tr valign="middle" align="center">
            <td>{{$roleusers->user_id}}</td>
            <td>{{$roleusers->role_id}}</td>
            <td>
                {!! Form::open(["route"=>["roleuser.destroy",$roleusers->id],"method"=>"delete", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
                {!! link_to_route("roleuser.edit", "Editar", $roleusers->id, ["class"=>"btn btn-success"]) !!}
                {!! link_to_route("roleuser.show", "Mostrar", $roleusers->id, ["class"=>"btn btn-warning"]) !!}
                {!! Form::submit("Eliminar", ["class"=>"btn btn-danger"]) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
