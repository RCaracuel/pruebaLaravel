
{{-- Para traernos la navegación --}}
@extends('layout')

@section('title','Proyecto '. $proyecto->titulo)

@section('content')

<h1>Título del proyecto: {{$proyecto->titulo}}</h1>
<form method="post" action="{{route('proyectos.destroy',$proyecto)}}">
    @csrf
    @method('DELETE')
    <button>Eliminar proyecto</button>
</form>

@endsection