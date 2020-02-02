@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table border="1">
                    <figcaption>Nuevo {!! link_to_route("serial.create", "Create", null, ["class"=>"btn btn-warning"]) !!}</figcaption>
                    <caption>Serial de tabla {!! link_to_route("home", "home") !!}</caption>
                    <thead>
                        <th>Serial</th>
                        <th>Modelo</th>
                        <th>Acción</th>
                    </thead>
                    <tbody>
                    @foreach ($serial as $serials)
                        <tr>
                        <td>{{$serials->serial}}</td>
                        <td>{{$serials->objeto_id}}</td>
                        <td>
                            {!! Form::open(["route"=>["serial.destroy",$serials->id],"method"=>"delete"]) !!}
                            {!! link_to_route("serial.edit", "Edit", $serials->id, ["class"=>"btn btn-danger"]) !!}
                            {!! link_to_route("serial.show", "Mostrar", $serials->id, ["class"=>"btn btn-primary"]) !!}
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
