<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de Catalogo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/Ceramica.css') }}">
</head>
<body>
  <header>
    <nav class="navbar">

      <div class="logo">
        <a href="Inicio.html">
          <img src="/Imagenes/logo4.png" alt="Logo">
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
        <button>Bisutería</button>
      </a>

      <a href="Ceramica.html">
        <button class="active">Cerámica</button>
      </a>

      <a href="Mascaras.html">
        <button>Máscaras</button>
      </a>
    </div>

    <div class="productos">
      <div class="producto">
        <img src="/Imagenes/Ceramica -1.png" alt="Juego de tazas artesanales">
        <a href="./MostrarCeramica.html#producto1" class="btn-mostrar">Mostrar</a>
      </div>

      <div class="producto">
        <img src="/Imagenes/Ceramica -2.png" alt="Plato decorativo artesanal">
        <a href="./MostrarCeramica.html#producto2" class="btn-mostrar">Mostrar</a>
      </div>

      <div class="producto">
        <img src="/Imagenes/Ceramica -3.png" alt="Set de cuencos con cucharas">
        <a href="./MostrarCeramica.html#producto3" class="btn-mostrar">Mostrar</a>
      </div>

      <div class="producto">
        <img src="/Imagenes/Ceramica -4.png" alt="Olla artesanal de barro">
        <a href="./MostrarCeramica.html#producto4" class="btn-mostrar">Mostrar</a>
      </div>

      <div class="producto">
        <img src="/Imagenes/Ceramica -5.png" alt="Set de platos florales">
        <a href="./MostrarCeramica.html#producto5" class="btn-mostrar">Mostrar</a>
      </div>

      <div class="producto">
        <img src="/Imagenes/Ceramica -6.png" alt="Set de cuencos de barro">
        <a href="./MostrarCeramica.html#producto6" class="btn-mostrar">Mostrar</a>
      </div>
    </div>
  </section>
  
  <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="/Imagenes/Logo footer.png" alt="Logo de Art Craft">
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
