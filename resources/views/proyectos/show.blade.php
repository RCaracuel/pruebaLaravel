
{{-- Para traernos la navegación --}}
@extends('layout')

@section('title','Proyecto '. $proyecto->titulo)

@section('content')

<h1>Título del proyecto: {{$proyecto->titulo}}</h1>

</p>

<p>Descripción: 
{{$proyecto->descripcion}}
</p>
<p>Fecha de creación:
    {{$proyecto->created_at->diffForHumans()}}
</p>

@endsection