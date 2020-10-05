@extends('layout')

@section('title', 'Contacto')
<!--Por parámetro recibe el nombre de donde vamos a insertar esta sección -->
@section('content')

<h1>Contacto</h1>

<form action="{{ route('contacto')}}" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre"><br/>
    <input type="email" name="email" placeholder="Email"><br/>
    <input name="asunto" placeholder="Asunto"><br/>
    <textarea name="contenido"  cols="30" rows="10" placeholder="Mensaje...">
        

    </textarea><br/>
    <button>Enviar</button>

    
</form>
{{-- <script>
    alert('hola');
</Script> --}}

@endsection <!-- todo lo que haya entre section y endsection se imprimirá donde se haga uso
del yield('content')-->