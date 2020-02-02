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

                    {!! Form::open(["route"=>["objeto.store"],"method"=>"post", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
                    {!! Form::token() !!}
                    {!! Form::label("nombre", "Nombre") !!}
                    {!! Form::text("nombre", null, ["class"=>"form-control"]) !!}
                    {!! Form::label("apellido", "Apellido") !!}
                    {!! Form::text("apellido", null, ["class"=>"form-control"]) !!}
                    {!! Form::label("modelo", "Modelo") !!}
                    {!! Form::text("modelo", null, ["class"=>"form-control"]) !!} <br>
                    {{-- {!! Form::label("user_id", "Dueño") !!}
                    {!! Form::select('user_id', $usuario->pluck('name'), null,['class' => 'form-control']) !!} <br> --}}
                    {!! Form::submit("Enviar", ["Class"=>"btn btn-secundary"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
