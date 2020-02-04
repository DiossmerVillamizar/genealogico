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
<p>Nombre:{{$roleuser->user_id}}</p>  <p>Cargo: {{$roleuser->role_id}}</p>
{{-- {{dd($role,$usuario, $roleuser)}} --}}
<br>
{!! link_to("roleuser", "Regresar", ['class'=>'btn btn-primary']) !!}
@endsection
