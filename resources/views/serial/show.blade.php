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
                    <p> <b>serial:</b> {{$serial->find(11)->serial}}  <b>Modelo:</b> {{--$serial->objetos->modelo FAIL--}} </p>
                    <p>Este equipo esta en perfecta condiciones para el uso diario.</p>
                    <b>{!! link_to_route("serial.index", "Inicio") !!}</b>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
