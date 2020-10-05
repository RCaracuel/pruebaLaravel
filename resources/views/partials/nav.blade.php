<NAV>
    {{-- asi nos devuelve la ruta interna --}}
    {{-- rouyteIs + name de la ruta nos devuelve bool si la ruta en la que estamos es la que le hemos pasado por parámetro --}}
    
    <UL>
        {{-- cuando un elemento de la navegación tenga la clase active el link se mnuestre como activo --}}

        {{-- Hacemos una función que por parámetro le pasamos el nombre de la ruta --}}
    <li class="{{setActive('contacto')}}"><a href="{{ route('contacto')}}">Contacto</a></li>
    <li><a href="{{ route('clientes.index')}}">Clientes</a></li>
    <li class="{{setActive('about')}}"><a href="{{ route('about')}}">About</a></li>
    <li class="{{setActive('proyectos.*')}}"><a href="{{ route('proyectos.index')}}">Proyectos</a></li>
    <li class=""><a href="/indexEjemplo">Ejemplo</a></li>
    <li class="{{setActive('home')}}"><a href="{{ route('home')}}">Home</a></li>
    
    </UL>
</NAV>