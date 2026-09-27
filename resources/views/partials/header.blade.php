<header>
    <nav class="navbar">

        <div class="logo">
            <a href="{{ route('inicio') }}" title="Art Craft">
                <img src="{{ asset('imagenes/logo4.png') }}" alt="Logo de Art Craft">
            </a>
        </div>

        <form class="contenedor-busqueda" action="{{ route('categorias') }}" method="GET" role="search">
            <input class="search-box" type="search" name="q" value="{{ request('q') }}"
                placeholder="Buscar producto..." aria-label="Buscar producto">
            <i class="fas fa-search"></i>
        </form>

        <div class="nav-icons">
            <a href="{{ route('inicio') }}">Inicio</a>

            <a href="{{ route('perfil-artesano') }}" title="Mi perfil">
                <i class="fa-solid fa-user"></i>
            </a>

            <a href="#" title="Notificaciones">
                <i class="fa-solid fa-bell"></i>
            </a>

            <a href="{{ route('carrito') }}" title="Carrito de compras">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>

            <div class="menu-container">
                <a href="#" class="btn-menu" title="Menú">
                    <i class="fa-solid fa-bars"></i>
                </a>

                <div class="menu-lateral">
                    <a href="{{ route('subir-producto') }}">Subir producto</a>
                    <a href="{{ route('perfil-artesano') }}">Perfil del artesano</a>
                    <a href="{{ route('blog') }}">Blog/Historias</a>
                    <a href="{{ route('contacto') }}">Contacto y soporte</a>
                    <a href="{{ route('sobre-nosotros') }}">Nosotros</a>
                    <a href="{{ route('categorias') }}">Categoría</a>
                </div>
            </div>
        </div>

    </nav>
</header>
