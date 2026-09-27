<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Craft - Mochilas</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="MostrarProducto.css">

  <style>
    .contenedor-detalles .producto-detalle {
      display: none !important;
    }

    .contenedor-detalles .producto-detalle:target {
      display: block !important;
    }

    body:not(:has(.producto-detalle:target)) #producto1 {
      display: block !important;
    }
  </style>
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

<main class="contenedor-detalles">

  <section id="producto1" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Categorias.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/mochila artesanal 1.png" alt="Bolso Wayúu colorido">
        </div>

        <div class="info-producto">
          <h1>Bolso Wayúu Colorido</h1>
          <p>La mochila Wayúu es una artesanía tradicional colombiana elaborada a mano por mujeres indígenas de la comunidad Wayúu. Está hecha en hilo tejido tipo crochet, con correa larga y adornos de borlas.</p>

          <div class="precio">$120.000</div>

          <a href="Carritoartesano.html" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="Pagar.html" class="btn btn-comprar">
            <i class="fa-solid fa-house"></i>
            Comprar ahora
          </a>
        </div>
      </div>

      <div class="opiniones">
        <h2>Opiniones de nuestros clientes</h2>
        <div class="calificacion">4.8 ★★★★☆</div>

        <div class="comentario">
          <strong>Laura G</strong> ★★★★☆ <br>
          Hermosa mochila, me encantó su material, todo perfecto.
        </div>

        <div class="comentario">
          <strong>Manuel N</strong> ★★★☆☆ <br>
          Muy bonita, sus colores son muy llamativos.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
        </div>

        <button class="btn-enviar" onclick="seleccionarBoton(this)">
          Enviar Reseña
        </button>
      </div>
    </div>
  </section>

  <section id="producto2" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Categorias.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/mochila artesanal 2.png" alt="Mochila negra artesanal">
        </div>

        <div class="info-producto">
          <h1>Mochila Negra Artesanal</h1>
          <p>Mochila tejida a mano con diseño negro y detalles geométricos en tonos claros. Su estilo artesanal la hace ideal para combinar con diferentes prendas.</p>

          <div class="precio">$95.000</div>

          <a href="Carritoartesano.html" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="Pagar.html" class="btn btn-comprar">
            <i class="fa-solid fa-house"></i>
            Comprar ahora
          </a>
        </div>
      </div>

      <div class="opiniones">
        <h2>Opiniones de nuestros clientes</h2>
        <div class="calificacion">4.7 ★★★★☆</div>

        <div class="comentario">
          <strong>Ana P</strong> ★★★★★ <br>
          Me gustó mucho el diseño y la calidad del tejido.
        </div>

        <div class="comentario">
          <strong>Carlos M</strong> ★★★★☆ <br>
          Es práctica, bonita y resistente.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
        </div>

        <button class="btn-enviar" onclick="seleccionarBoton(this)">
          Enviar Reseña
        </button>
      </div>
    </div>
  </section>

  <section id="producto3" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Categorias.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/mochila artesanal 3.png" alt="Mochila rosada Wayúu">
        </div>

        <div class="info-producto">
          <h1>Mochila Rosada Wayúu</h1>
          <p>Mochila artesanal tejida a mano en tonos rosados y morados, con diseño tradicional y borlas decorativas.</p>

          <div class="precio">$110.000</div>

          <a href="Carritoartesano.html" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="Pagar.html" class="btn btn-comprar">
            <i class="fa-solid fa-house"></i>
            Comprar ahora
          </a>
        </div>
      </div>

      <div class="opiniones">
        <h2>Opiniones de nuestros clientes</h2>
        <div class="calificacion">4.9 ★★★★★</div>

        <div class="comentario">
          <strong>Sofía R</strong> ★★★★★ <br>
          Los colores son preciosos y el tejido se ve muy fino.
        </div>

        <div class="comentario">
          <strong>Diana C</strong> ★★★★☆ <br>
          Muy linda, igual a la imagen.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
        </div>

        <button class="btn-enviar" onclick="seleccionarBoton(this)">
          Enviar Reseña
        </button>
      </div>
    </div>
  </section>

  <section id="producto4" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Categorias.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/mochila artesanal 4.png" alt="Mochila azul pequeña">
        </div>

        <div class="info-producto">
          <h1>Mochila Azul Pequeña</h1>
          <p>Mochila artesanal pequeña con correa larga, elaborada en tonos azules y detalles tejidos en color beige.</p>

          <div class="precio">$85.000</div>

          <a href="Carritoartesano.html" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="Pagar.html" class="btn btn-comprar">
            <i class="fa-solid fa-house"></i>
            Comprar ahora
          </a>
        </div>
      </div>

      <div class="opiniones">
        <h2>Opiniones de nuestros clientes</h2>
        <div class="calificacion">4.6 ★★★★☆</div>

        <div class="comentario">
          <strong>Valentina S</strong> ★★★★☆ <br>
          Es pequeña pero muy cómoda para llevar lo necesario.
        </div>

        <div class="comentario">
          <strong>Luisa F</strong> ★★★★★ <br>
          Me encantó el color azul y el diseño.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
        </div>

        <button class="btn-enviar" onclick="seleccionarBoton(this)">
          Enviar Reseña
        </button>
      </div>
    </div>
  </section>

  <section id="producto5" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Categorias.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/mochila artesanal 5.png" alt="Mochila turquesa Wayúu">
        </div>

        <div class="info-producto">
          <h1>Mochila Turquesa Wayúu</h1>
          <p>Mochila tejida a mano en tonos turquesa y rojo, con borlas decorativas y correa larga para llevar al hombro.</p>

          <div class="precio">$115.000</div>

          <a href="Carritoartesano.html" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="Pagar.html" class="btn btn-comprar">
            <i class="fa-solid fa-house"></i>
            Comprar ahora
          </a>
        </div>
      </div>

      <div class="opiniones">
        <h2>Opiniones de nuestros clientes</h2>
        <div class="calificacion">4.8 ★★★★☆</div>

        <div class="comentario">
          <strong>María J</strong> ★★★★★ <br>
          Hermosa mochila, los colores se ven muy vivos.
        </div>

        <div class="comentario">
          <strong>Andrés T</strong> ★★★★☆ <br>
          Buen tamaño y excelente acabado.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
        </div>

        <button class="btn-enviar" onclick="seleccionarBoton(this)">
          Enviar Reseña
        </button>
      </div>
    </div>
  </section>

  <section id="producto6" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Categorias.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/mochila artesanal 6.png" alt="Mochila azul con borlas">
        </div>

        <div class="info-producto">
          <h1>Mochila Azul con Borlas</h1>
          <p>Mochila artesanal de color azul con detalles tejidos en blanco y borlas decorativas en tonos tierra.</p>

          <div class="precio">$105.000</div>

          <a href="Carritoartesano.html" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="Pagar.html" class="btn btn-comprar">
            <i class="fa-solid fa-house"></i>
            Comprar ahora
          </a>
        </div>
      </div>

      <div class="opiniones">
        <h2>Opiniones de nuestros clientes</h2>
        <div class="calificacion">4.7 ★★★★☆</div>

        <div class="comentario">
          <strong>Camila V</strong> ★★★★★ <br>
          Muy bonita, combina con todo.
        </div>

        <div class="comentario">
          <strong>Felipe G</strong> ★★★★☆ <br>
          Buen producto y buen material.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
          <span onclick="seleccionarEstrella(this)">★</span>
        </div>

        <button class="btn-enviar" onclick="seleccionarBoton(this)">
          Enviar Reseña
        </button>
      </div>
    </div>
  </section>

</main>

<script>
  function seleccionarBoton(boton) {
    document.querySelectorAll('.btn, .btn-enviar').forEach(btn => {
      btn.classList.remove('activo');
    });
    boton.classList.add('activo');
  }

  function seleccionarEstrella(estrella) {
    let estrellas = estrella.parentElement.querySelectorAll('span');
    estrellas.forEach((s, index) => {
      if (index <= [...estrellas].indexOf(estrella)) {
        s.classList.add('seleccionada');
      } else {
        s.classList.remove('seleccionada');
      }
    });
  }
</script>

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
        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-youtube"></i></a>
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
        <a href="#"><i class="fa-brands fa-cc-visa"></i></a>
        <a href="#"><i class="fa-brands fa-cc-mastercard"></i></a>
        <a href="#" class="nequi">N</a>
        <a href="#"><i class="fa-solid fa-building-columns"></i></a>
      </div>
    </div>
  </div>

  <div class="grupo-2">
    <small>&copy; 2026 <b>Art Craft</b> - Todos los Derechos Reservados.</small>
  </div>
</footer>

</body>
</html>
