@extends('layout.app')
@section('title','Role')
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
<table class="table table-hover">
    <figcaption class="bold center">Role {!! link_to_route("role.create", "Nuevo", null,["class"=>"btn btn-primary"]) !!}</figcaption>
    <thead>
        <tr valign="middle" align="center">
            <th>Cargo</th>
            <th>Acción</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($role as $roles)
        <tr valign="middle" align="center">
            <td>{{$roles->cargo}}</td>
            <td>
                {!! Form::open(["route"=>["role.destroy",$roles->id],"method"=>"delete", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
                {!! link_to_route("role.edit", "Editar", $roles->id, ["class"=>"btn btn-success"]) !!}
                {!! link_to_route("role.show", "Mostrar", $roles->id, ["class"=>"btn btn-warning"]) !!}
                {!! Form::submit("Eliminar", ["class"=>"btn btn-danger"]) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
