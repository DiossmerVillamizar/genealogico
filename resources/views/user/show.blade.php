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
{{dd($usuario->roles)}}
@foreach ($usuario->roles as $role)
    {{$role}}
@endforeach
@endsection
