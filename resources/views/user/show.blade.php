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

@foreach ($usuario->roles as $role)
    {{$role->cargo}}
@endforeach
<br>
{!! link_to("user", "Regresar", ['class'=>'btn btn-primary']) !!}
@endsection
