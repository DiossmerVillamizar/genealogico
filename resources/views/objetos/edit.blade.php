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

                    {!! Form::open(["route"=>["objeto.update",$objeto->id],"method"=>"put", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
                    {!! Form::token() !!}
                    {!! Form::label("nombre", "Nombre") !!}
                    {!! Form::text("nombre", $objeto->nombre, ["class"=>"form-control"]) !!}
                    {!! Form::label("apellido", "Apellido") !!}
                    {!! Form::text("apellido", $objeto->apellido, ["class"=>"form-control"]) !!}
                    {!! Form::label("modelo", "Modelo") !!}
                    {!! Form::text("modelo", $objeto->modelo, ["class"=>"form-control"]) !!} <br>
                    {{-- {!! Form::label("user_id", "Dueño") !!}
                    {!! Form::select('user_id', $usuario->pluck('name'), null,['class' => 'form-control']) !!} <br> --}}
                    {!! Form::submit("Actualizar", ["Class"=>"btn btn-secundary"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
