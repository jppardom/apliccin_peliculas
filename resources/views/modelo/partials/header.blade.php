<header>
    <h2>Menu de Peliculas</h2>
    <nav>
        <ul>
            <li> <a href="{{route('home')}}" class = {{request()->routeIs('home') ? 'active' : "" }} >Inicio</a>
            </li>
            <li> <a href="{{route('peliculas.index')}}" class = {{request()->routeIs('peliculas.*') ? 'active' : "" }} >Peliculas</a>

            </li>
            <li> <a href="{{route('contactos')}}" class = {{request()->routeIs('contactos') ? 'active' : "" }} >Contactos</a>
            </li>

            <li>
                <a href="{{route('informacion.index')}}" class = {{request()->routeIs('informacion.*') ? 'active' : "" }}>Información</a>
            </li>
        </ul>
    </nav>
</header>