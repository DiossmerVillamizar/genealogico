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

                    {!! Form::open(["route"=>["serial.store"],"method"=>"post", "autocomplete"=>"off", "enctype"=>"multipart/form-data"]) !!}
                    {!! Form::token() !!}
                    {!! Form::label("serial", "Serial") !!}
                    {!! Form::text("serial", null, ["class"=>"form-control"]) !!}
                    {!! Form::label("objeto_id", "Modelo") !!}
                    {!! Form::select('objeto_id', $objeto->pluck('modelo','id'), null,['placeholder'=>'Select Option','class' => 'form-control']) !!} <br>
                    {!! Form::submit("Enviar", ["Class"=>"btn btn-secundary"]) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
