<!-- extends busca la vista que le pasemos en la carpeta views, en este caso layout-->
@extends('layout')

{{-- Para el title de la web --}}
@section('title', 'Home')
<!--Por parámetro recibe el nombre de donde vamos a insertar esta sección -->
@section('content')

<h1>Home</h1>

@endsection <!-- todo lo que haya entre section y endsection se imprimirá donde se haga uso
del yield('content')-->