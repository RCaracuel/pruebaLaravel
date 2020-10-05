@extends('layout')

@section('title', 'Portfolio')

<!--Por parámetro recibe el nombre de donde vamos a insertar esta sección -->
@section('content')

<h1>Proyectos</h1>

<a href="{{route('proyectos.create')}}">Crear proyecto</a>




{{-- Sin datatable, enrutando "normal" --}}

{{-- <ul> --}}
<!-- Se abriría php-->
{{-- 
    <!-- //opción 1
        // foreach ($portfolio as $portfolioitem) {
        //     echo "<li>".$portfolioitem['title']."</li>";
        // } -->
<!-- Cerrariamos php y el bucle
        < ?php endforeach ?> -->

            <!-- Si no hay items, podemos poner un mensaje predeterminado -->

            <!-- Sólo si existe la variable -->
            <!-- @if($portfolio) -->
            @isset($portfolio)
            <!-- Por si no existiese evitamos que ocurra un error usando isset -->

     <!-- //opción 2 llamando a la variable con blade -->
            @foreach ($portfolio as $portfolioitem)
                <li>{{ $portfolioitem['title'] }}</li>
            
                @endforeach
        @else
            <li>No hay elementos para mostrar</li>
        <!-- @endif -->
        {{-- @endisset --}}
        

        {{-- {{var_dump($proyectos[0])}} --}}
        
        {{-- @forelse($proyectos as $proyecto)  --}}
        {{-- La BD tra objetos, por lo que hay que acceder a él de esta forma, no como array --}}
        {{-- Le pasamos el objeto proyecto y laravel automáticamente va a obtener el id a través de él
            y nos va a generar un link para cada proyecto --}}
            {{-- {{var_dump($proyecto)}} --}}
                {{-- <li><a href="{{route('proyectos.show',$proyecto)}}">{{$proyecto->titulo }}</a></li>  --}}
                {{-- <pre>{{var_dump($loop->last ?'Es el último' : '')}}</pre> --}}
                {{-- <td>celda dos</td>
                <td>celda tres</td>
                <td>celda cuatro</td>
                <td>celda cinco</td> --}} 
            {{-- <li>{{ $proyecto ->descripcion }}</li> --}}
            {{-- <li>{{ $proyecto->created_at->format('Y')}}</li>  --}}
            {{-- <li>{{ $proyecto->created_at->diffForHumans()}}</li>  --}}
                 {{-- @empty --}}
                {{-- <li>No hay proyectos para mostrar</li> --}}

                
        {{-- @endforelse --}}

        {{-- Para mostrar los links de paginación --}}
       {{-- {{$proyectos->links()}}  --}}
            {{-- </ul> --}}


<table class="table table-striped table-bordered" id="proyectos">
    <thead>
        <tr>
            <th class="bg-primary">Id</th>
            <th class="bg-secondary">Titulo</th>
            <th class="bg-success">Descripción</th>
            <th class="bg-info">Opciones</th>
        </tr>
    </thead>
    {{-- <tr>
       
        
        


    </tr> --}}
<!-- Se abriría php-->
{{-- 
    <!-- //opción 1
        // foreach ($portfolio as $portfolioitem) {
        //     echo "<li>".$portfolioitem['title']."</li>";
        // } -->
<!-- Cerrariamos php y el bucle
        < ?php endforeach ?> -->

            <!-- Si no hay items, podemos poner un mensaje predeterminado -->

            <!-- Sólo si existe la variable -->
            <!-- @if($portfolio) -->
            @isset($portfolio)
            <!-- Por si no existiese evitamos que ocurra un error usando isset -->

     <!-- //opción 2 llamando a la variable con blade -->
            @foreach ($portfolio as $portfolioitem)
                <li>{{ $portfolioitem['title'] }}</li>
            
                @endforeach
        @else
            <li>No hay elementos para mostrar</li>
        <!-- @endif -->
        @endisset
        --}}
{{-- 
        @forelse($proyectos as $proyecto) --}}
        {{-- La BD tra objetos, por lo que hay que acceder a él de esta forma, no como array --}}
        {{-- Le pasamos el objeto proyecto y laravel automáticamente va a obtener el id a través de él
            y nos va a generar un link para cada proyecto --}}
            {{-- <tr>
                <td><a href="{{route('proyectos.show',$proyecto)}}">{{$proyecto->titulo }}</a></td> {{--<pre>{{var_dump($loop->last ?'Es el último' : '')}}</pre>--}}
                {{-- <td>celda dos</td>
                <td>celda tres</td>
                <td>celda cuatro</td>
                <td>celda cinco</td> --}} 
            {{-- <li>{{ $proyecto ->descripcion }}</li> --}}
            {{-- <li>{{ $proyecto->created_at->format('Y')}}</li>  --}}
            {{-- <li>{{ $proyecto->created_at->diffForHumans()}}</li>  --}}
                {{-- @empty
                <td>No hay proyectos para mostrar</td>

                </tr>
        @endforelse --}}

        {{-- Para mostrar los links de paginación --}}
      {{-- {{$proyectos->links()}} --}}
        </table>

@endsection <!-- todo lo que haya entre section y endsection se imprimirá donde se haga uso
del yield('content')-->

@section('scripts')
    <script>
        
    //     var ide;
    // var getId = function ( data, type, row ) {
        
    //     ide=data;
       
    //     return data;
    // };
        
    //     //data es el título
    //     var editIcon = function ( data, type, row ) {
    //     var enlace;
    //     if ( type === 'display' ) {
            
    //         return ' <a href="proyectos/'+ide+'">'+data+'<a/>';
    //     }
    //     return data;
    // };



   
        $(document).ready(function(){
            $('#proyectos').DataTable({
                processing:true,
                serverSider:true,
                ajax:'{!! route('proyectos.datatable')!!}',
                columns:[
                    {data:'id'},
                    {data:'titulo'},
                    {data:'descripcion'},
                    {data:'opciones'}
                ]
               

            })

//             Swal.fire({
//   title: '¿Está seguro?',
//   text: "¡No vas a poder deshacer esto!",
//   icon: 'warning',
//   showCancelButton: true,
//   confirmButtonColor: '#3085d6',
//   cancelButtonColor: '#d33',
//   confirmButtonText: '¡Si, borralo!'
// }).then((result) => {
//   if (result.isConfirmed) {
//     Swal.fire(
//       '¡Borrado!',
//       'Ha sido borrado.',
//       'Completado'
//     )
//   }
// })

        });
    </script>
@endsection