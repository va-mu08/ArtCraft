<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de Catalogo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <img src="{{ asset('imagenes/Bisuteria-1.png') }}" alt="Bisutería">
</head><link rel="stylesheet" href="{{ asset('css/Bisuteria.css') }}">
<body>
  <header>
    <nav class="navbar">

      <div class="logo">
        <a href="Inicio.html">
          <img src="{{ asset('imagenes/logo-footer.png') }}" alt="Logo de Art Craft">

        </a>
      </div>

      <div class="contenedor-busqueda">
        <input class="search-box" type="text" placeholder="Buscar producto...">
        <i class="fas fa-search"></i>
      </div>

      <div class="nav-icons">
        <a href="Inicio.html">Inicio</a>

        <a href="PerfilArtesano.html">
          <i class="fa-solid fa-user"></i>
        </a>

        <a href="Notificaciones.html">
          <i class="fa-solid fa-bell"></i>
        </a>

        <a href="Carritoartesano.html">
          <i class="fa-solid fa-cart-shopping"></i>
        </a>

        <div class="menu-container">
          <a href="#" class="btn-menu">
            <i class="fa-solid fa-bars"></i>
          </a>

          <div class="menu-lateral">
            <a href="Subirproducto.html">Subir producto</a>
            <a href="PerfilArtesano.html">Perfil del artesano</a>
            <a href="bloghistoria.html">Blog/Historias</a>
            <a href="Contacto.html">Contacto y soporte</a>
            <a href="SobreNosotros.html">Nosotros</a>
            <a href="Categorias.html">Categoría</a>
          </div>
        </div>
      </div>

    </nav>
  </header>

  <section class="categorias">
    <h2>Catalogo</h2>

    <div class="tabs">
      <a href="Categorias.html">
        <button>Mochilas</button>
      </a>

      <a href="Bisuteria.html">
        <button class="active">Bisutería</button>
      </a>

      <a href="Ceramica.html">
        <button>Cerámica</button>
      </a>

      <a href="Mascaras.html">
        <button>Máscaras</button>
      </a>
    </div>

    <div class="productos">
      <div class="producto">
        <img src="{{ asset('imagenes/Bisuteria-1.png') }}" alt="Bisutería">
        <a href="MostrarBisuteria.html#producto1">
          <button>Mostrar</button>
        </a>
      </div>

      <div class="producto">
        <img src="{{ asset('imagenes/Bisuteria-2ng.png') }}" alt="Bisutería">
        <a href="MostrarBisuteria.html#producto2">
          <button>Mostrar</button>
        </a>
      </div>

      <div class="producto">
        <img src="{{ asset('imagenes/Bisuteria-3.png') }}" alt="Bisutería">
        <a href="MostrarBisuteria.html#producto3">
          <button>Mostrar</button>
        </a>
      </div>

      <div class="producto">
        <img src="{{ asset('imagenes/Bisuteria-4.png') }}" alt="Bisutería">
        <a href="MostrarBisuteria.html#producto4">
          <button>Mostrar</button>
        </a>
      </div>

      <div class="producto">
        <img src="{{ asset('imagenes/Bisuteria-5.png') }}" alt="Bisutería">
        <a href="MostrarBisuteria.html#producto5">
          <button>Mostrar</button>
        </a>
      </div>

      <div class="producto">
        <img src="{{ asset('imagenes/Bisuteria-6png.png') }}" alt="Bisutería">
        <a href="MostrarBisuteria.html#producto6">
          <button>Mostrar</button>
        </a>
      </div>
    </div>
  </section>
  
  <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="{{ asset('imagenes/Logo footer.png') }}" alt="Logo de Art Craft">

                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <div class="red-social">
                          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                          <a href="#"><i class="fa-brands fa-instagram"></i></a>
                          <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
              <h2>CONTÁCTANOS</h2>

              <p><i class="fa-solid fa-location-dot"></i> Popayán, Cauca</p>
              <p><i class="fa-solid fa-phone"></i> +57 300 000 0000</p>
              <p><i class="fa-solid fa-envelope"></i> artcraft@gmail.com</p>
            </div>
            <div class="box">
              <h2>MÉTODOS DE PAGO</h2>
                <div class="red-pagos">
                  <a href=""><i class="fa-brands fa-cc-visa"></i></a>
                  <a href=""><i class="fa-brands fa-cc-mastercard"></i></a>
                  <a href="#" class="nequi">N</a>
                  <a href=""><i class="fa-solid fa-building-columns"></i></a>
                </div>
             </div>

        </div>

        </div>
        <div class="grupo-2">
            <small>&copy; 2026 <b>Art Craft</b> - Todos los Derechos Reservados.</small>
        </div>
  </footer>
</body>
</html>
