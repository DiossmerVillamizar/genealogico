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
                    <p><b>Relación De One To One</b></p>
                    <p> <b>nombre:</b> {{$objeto->nombre}} <b>apellido:</b> {{$objeto->apellido}}</p>
                    <p>Este equipo esta en perfecta condiciones para el uso diario, el modelo <br>
                    presente: <b>{{$objeto->modelo}}</b> Tiene como serial: {{$objeto->serials->serial}}.</p>
                    <b>{!! link_to_route("objeto.index", "Inicio") !!}</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
