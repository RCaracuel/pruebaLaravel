<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

{{-- Datatables links --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    

    <title>@yield('title')</title>
    <style>
        body{
            padding:20px;
        }
        .active a{
            color: red;
            text-decoration: none;
        }

    </style>
</head>
<body>

    @include('partials.nav')
  <!--  Bienvenida-->
   
    <!--?? para mostrar una alternativa si la variable nombre no está definida
    //así no da error
    
   
    //llamada a la variable con blade-->
     <!-- {{  $nombre ?? "Invitado" }} -->

<!-- Para que el contenido se muestre dinámicamente -->
<!--Recibe como parámetro un nombre para diferenciarla ya que se pueden usar
     varios yield en la misma página
Le hemos nombrado content (puede ser cualquierda) y ahora en la vista que queramos, añadimos section
-->
    @yield('content')

    <script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- Datatables link --}}
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    @yield('scripts')
</body>
</html>