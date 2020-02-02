@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border="2" cellpadding="3" cellspacing="5">
                        <caption>Usuario {!! link_to_route("home", "home") !!}</caption>
                        <thead>
                            <tr valing="middle" align="center">
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>password</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($usuario as $usuarios)
                            <tr>
                            <td>{{$usuarios->id}}</td>
                            <td>{{$usuarios->name}}</td>
                            <td>{{$usuarios->email}}</td>
                            <td>{{$usuarios->password}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <table border="2" cellpadding="3" cellspacing="5">
                        <figcaption>Objetos {!! link_to_route("objeto.create", "Crear",null, ["class"=>"btn btn-warning"]) !!}</figcaption>
                        <thead>
                            <tr valing="middle" align="center">
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Modelo</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($objeto as $objetos)
                            <tr>
                            <td>{{$objetos->id}}</td>
                            <td>{{$objetos->nombre}}</td>
                            <td>{{$objetos->apellido}}</td>
                            <td>{{$objetos->modelo}}</td>
                            <td>{!! Form::open(["route"=>["objeto.destroy",$objetos->id],"method"=>"delete"]) !!}
                                {!! link_to_route("objeto.edit", "Edit", $objetos->id, ["class"=>"btn btn-danger"]) !!}
                                {!! link_to_route("objeto.show", "Mostrar", $objetos->id, ["class"=>"btn btn-primary"]) !!}
                                {!! Form::submit("Eliminar", ["class"=>"btn btn-success"]) !!}
                                {!! Form::close() !!}
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
