<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Sobre Nosotros - Art Craft</title>
  <link rel="stylesheet" href="SobreNosotros.css">
</head>
<body>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina de Sobre Nosotros</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/SobreNosotros.css') }}">
</head>
<body>
 <header>
    <nav class="navbar">
    <a href="Inicio.html">
      <div class="logo">
        <img src="/Imagenes/Logo.png" alt="Logo">
      </div>
    </a>
      <div class="contenedor-busqueda">
        <input class="search-box" type="text" placeholder="Buscar producto...">
        <i class="fas fa-search"></i>
      </div>
      <div class="nav-icons">
          <a href="Inicio.html">Inicio</a>
          <a href="PerfilArtesano.html"><i class="fa-solid fa-user"></i></a>
          <a href="Notificaciones.html"><i class="fa-solid fa-bell"></i></a>
          <a href="Carrito.html"><i class="fa-solid fa-cart-shopping"></i></a>

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
  <section id="hero">
    <h1>Preservando el legado de nuestras raices</h1>
  </section>

<div class="contenedor-sobrenosotros">
  <div class="mision">
  <div class="header">Nuestra Misión</div>
  <p>
    Nuestra misión es apoyar, promover y fortalecer el trabajo de los artesanos colombianos, preservando las tradiciones culturales y el patrimonio ancestral que representan nuestras raíces. Buscamos generar oportunidades de crecimiento económico, formación y visibilidad para las comunidades artesanales, impulsando productos hechos a mano con identidad, creatividad y calidad. A través de nuestras iniciativas, queremos conectar la cultura colombiana con nuevas generaciones y mercados, fomentando el valor del arte artesanal como símbolo de historia, talento y desarrollo sostenible.
  </p>
</div>


  <div class="impacto">
   <div class="header">Nuestro Impacto</div>
     <div class="contenido">
        <img src="/Imagenes/impacto.png" alt="Ilustración artesanos">
     </div>
  </div>
</div>
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
