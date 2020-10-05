@extends('layout')

@section('title', 'Clientes')

<!--Por parámetro recibe el nombre de donde vamos a insertar esta sección -->
@section('content')

<h1>Clientes</h1>

{{-- <a href="{{route('proyectos.create')}}">Crear proyecto</a> --}}


<table class="table table-striped table-bordered" id="clientes">
    <thead>
        <tr>
            <th class="bg-primary">Id</th>
            <th class="bg-secondary">Nombre</th>
            <th class="bg-success">Edad</th>
            <th class="bg-warning">Tipo</th>
            <th class="bg-info">Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $item)
        <tr>
        <td>{{$item->idClientes}}</td>
        <td>{{$item->nombre}}</td>
        <td>{{$item->edad}}</td>
        <td>
            <select name='opciones'>
            @foreach ($clientes as $item2)
            <option>{{ $item2['fkidColectivo'] }}</option>
        
            @endforeach
            </select>
        </td>
        <td></td>

        </tr>
        @endforeach
    
    </tbody>

        </table>

        {{-- {{dd($clientes)}} --}}

@endsection <!-- todo lo que haya entre section y endsection se imprimirá donde se haga uso
del yield('content')-->

@section('scripts')
    <script>
        

        $(document).ready(function(){
            $('#clientes').DataTable({
                processing:true,
                serverSider:true,
                ajax:'{!! route('clientes.datatable')!!}',
                columns:[
                    {data:'idClientes'},
                    {data:'nombre'},
                    {data:'edad'},
                    {data:'fkidColectivo'},
                    {data:'opciones'}
                ]
               

            });


        });
    </script>
@endsection