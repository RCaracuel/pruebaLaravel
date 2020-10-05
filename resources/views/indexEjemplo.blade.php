@extends('layout')

@section('title', 'Portfolio')

<!--Por parámetro recibe el nombre de donde vamos a insertar esta sección -->
@section('content')
Muestro la variable:

{{dd($variable)}}
{{-- {{$variable["uno"] ?? ''}} --}}


@endsection