@extends('layout')

@section('title', 'Portfolio')

<!--Por parámetro recibe el nombre de donde vamos a insertar esta sección -->
@section('content')

<h1>Editar proyecto {{$proyecto->titulo}}</h1>

@if($errors->any())

<ul>
    @foreach ($errors->all() as $error)
<li>{{$error}}</li>
    @endforeach

</ul>



@endif

<form method="post" action="{{ route('proyectos.update',$proyecto) }}">
    @csrf @method('PATCH')
    
    {{-- <input type="hidden" name="_method" value="PATCH"> --}}
{{-- Título <br/><input type="text" name="titulo" value="{{$proyecto->titulo}}"><br/> --}}
Título <br/><input type="text" name="titulo" value="{{old('titulo',$proyecto->titulo)}}"><br/>
    Descripción<br/><textarea name="descripcion" cols="30" rows="10">{{old('descripcion',$proyecto['descripcion'])}}</textarea><br/>
    <button>Actualizar</button>
</form>

@endsection <!-- todo lo que haya entre section y endsection se imprimirá donde se haga uso
del yield('content')-->