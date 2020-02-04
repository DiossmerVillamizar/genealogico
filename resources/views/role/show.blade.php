@extends('layout.app')
@section('title','Mostrar')
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

@endsection
@section('aside')
@include('include.aside')
@endsection
@section('footer')

@endsection
@section('content')

    @forelse ($role as $usuario)
    <em>ERROR DE RELACION NO ES LA PRINCIPAL </em>
    @empty
    {{$usuario}}
    @endforelse
@endsection
