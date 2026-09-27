<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Craft - Perfil Artesano</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  	<link rel="stylesheet" href="{{ asset('css/PerfilArtesano.css') }}">
</head>
<body>

<header>
    <nav class="navbar">
    <a href="Inicio.html">
      <div class="logo">
        <img src="/Imagenes/logo4.png" alt="Logo">
      </div>
    </a>
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

<section class="artisan-banner">
    <div class="banner-content">
        <h1>Perfil del Artesano</h1>
        <h2 class="artisan-name">María Gómez</h2>
        <p class="artisan-location">Artesana de Nariño</p>
    </div>

    <img src="Imagenes/perfilArtesano2.png" alt="María Gómez" class="banner-bg">
    <img src="../Imagenes/Artesana.png" alt="María Gómez" class="banner-bg">

</section>

<main class="info-container">
    <section class="about-me">
        <h3>Sobre Mi</h3>
        <div class="highlight-box">
            <h4>Aprendimos de nuestros ancestros...</h4>
        </div>
        <p class="description">
            Llevo más de 30 años creando artesanías que cuentan la historia de mi tierra
        </p>
    </section>

    <section class="creations">
        <h3>Mis artesanías</h3>
        <div class="creations-grid">
            <img src="Imagenes/Mochila.png" alt="Mochila">
            <img src="Imagenes/platos.png" alt="Platos">
            <img src="Imagenes/Jarron.png" alt="Jarron">
            <img src="Imagenes/Olla.png" alt="Olla">
        </div>
    </section>
</main>
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




