@extends('layout')

@section('title', 'About')
<!--Por parámetro recibe el nombre de donde vamos a insertar esta sección -->
@section('content')

<h1>About</h1>

@endsection <!-- todo lo que haya entre section y endsection se imprimirá donde se haga uso
del yield('content')-->