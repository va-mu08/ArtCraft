<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Craft - Máscaras</title>

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
      <a href="PerfilArtesano.html"><i class="fa-solid fa-user"></i></a>
      <a href="Notificaciones.html"><i class="fa-solid fa-bell"></i></a>
      <a href="Carritoartesano.html"><i class="fa-solid fa-cart-shopping"></i></a>

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
      <a href="Mascaras.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Mascara -1.png" alt="Máscara ceremonial con tocado">
        </div>

        <div class="info-producto">
          <h1>Máscara Ceremonial con Tocado</h1>
          <p>Máscara artesanal tallada con detalles coloridos en la parte superior, inspirada en expresiones culturales tradicionales.</p>

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
        <div class="calificacion">4.8 ★★★★☆</div>

        <div class="comentario">
          <strong>Laura G</strong> ★★★★☆ <br>
          Muy bonita, sus colores llaman mucho la atención.
        </div>

        <div class="comentario">
          <strong>Manuel N</strong> ★★★★☆ <br>
          Excelente pieza decorativa.
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
      <a href="Mascaras.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Mascara -2.png" alt="Máscara mitad madera mitad negra">
        </div>

        <div class="info-producto">
          <h1>Máscara Doble Tono</h1>
          <p>Máscara artesanal con diseño dividido en dos tonos, combinando apariencia natural de madera con acabado oscuro.</p>

          <div class="precio">$88.000</div>

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
          Tiene un diseño muy original.
        </div>

        <div class="comentario">
          <strong>Carlos M</strong> ★★★★☆ <br>
          Se ve muy bien como decoración.
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
      <a href="Mascaras.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Mascara -3.png" alt="Máscara multicolor decorativa">
        </div>

        <div class="info-producto">
          <h1>Máscara Multicolor Decorativa</h1>
          <p>Máscara artesanal con diseño colorido y expresivo, ideal para decorar espacios con identidad cultural.</p>

          <div class="precio">$92.000</div>

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
          Los colores son hermosos.
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
      <a href="Mascaras.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Mascara -4.png" alt="Máscara alargada artesanal">
        </div>

        <div class="info-producto">
          <h1>Máscara Alargada Artesanal</h1>
          <p>Máscara de forma alargada con detalles cálidos y expresivos, elaborada para decoración artesanal.</p>

          <div class="precio">$80.000</div>

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
          Es diferente y muy llamativa.
        </div>

        <div class="comentario">
          <strong>Luisa F</strong> ★★★★★ <br>
          Me encantó para decorar mi sala.
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
      <a href="Mascaras.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Mascara -5.png" alt="Máscara negra tallada">
        </div>

        <div class="info-producto">
          <h1>Máscara Negra Tallada</h1>
          <p>Máscara artesanal de tono oscuro con detalles tallados, perfecta para espacios con estilo tradicional.</p>

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
        <div class="calificacion">4.8 ★★★★☆</div>

        <div class="comentario">
          <strong>María J</strong> ★★★★★ <br>
          Los detalles tallados son muy bonitos.
        </div>

        <div class="comentario">
          <strong>Andrés T</strong> ★★★★☆ <br>
          Buen acabado artesanal.
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
      <a href="Mascaras.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Mascara -6.png" alt="Máscara verde tradicional">
        </div>

        <div class="info-producto">
          <h1>Máscara Verde Tradicional</h1>
          <p>Máscara artesanal con tonos verdes, rojos y amarillos, inspirada en diseños tradicionales y decorativos.</p>

          <div class="precio">$90.000</div>

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
          Muy colorida y especial.
        </div>

        <div class="comentario">
          <strong>Felipe G</strong> ★★★★☆ <br>
          Excelente producto artesanal.
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