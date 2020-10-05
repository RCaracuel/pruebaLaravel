@extends('layout')

@section('title', 'Portfolio')

<!--Por parámetro recibe el nombre de donde vamos a insertar esta sección -->
@section('content')

<h1>Crear proyecto</h1>

@if($errors->any())

<ul>
    @foreach ($errors->all() as $error)
<li>{{$error}}</li>
    @endforeach

</ul>



@endif

<form method="post" action="{{ route('proyectos.store') }}">
    @csrf
    Título <br/><input type="text" name="titulo" ><br/>
    Descripción<br/><textarea name="descripcion"  cols="30" rows="10"></textarea><br/>
    <button>Guardar</button>
</form>

@endsection <!-- todo lo que haya entre section y endsection se imprimirá donde se haga uso
del yield('content')-->