<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Craft - Producto</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/Pagar.css') }}">

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
      <a href="Bisuteria.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Bisuteria -1.png" alt="Pulsera artesanal rosada">
        </div>

        <div class="info-producto">
          <h1>Pulsera Artesanal Rosada</h1>
          <p>Pulsera elaborada a mano con tejido artesanal y detalles en color rosado.</p>

          <div class="precio">$35.000</div>

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
          Hermosa pulsera, me encantó su material, todo perfecto.
        </div>

        <div class="comentario">
          <strong>Manuel N</strong> ★★★☆☆ <br>
          Muy bonita y cómoda para usar todos los días.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
        </div>

        <button class="btn-enviar">Enviar Reseña</button>
      </div>
    </div>
  </section>

  <section id="producto2" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Bisuteria.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Bisuteria -2ng.png" alt="Pulsera artesanal cafe">
        </div>

        <div class="info-producto">
          <h1>Pulsera Artesanal Café</h1>
          <p>Pulsera tejida a mano con tonos cafés y diseño artesanal tradicional.</p>

          <div class="precio">$32.000</div>

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
          Tiene un diseño muy bonito y artesanal.
        </div>

        <div class="comentario">
          <strong>Carlos M</strong> ★★★★☆ <br>
          Me gustó mucho el color y la calidad.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
        </div>

        <button class="btn-enviar">Enviar Reseña</button>
      </div>
    </div>
  </section>

  <section id="producto3" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Bisuteria.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Bisuteria -3.png" alt="Aretes blancos artesanales">
        </div>

        <div class="info-producto">
          <h1>Aretes Blancos Artesanales</h1>
          <p>Aretes largos elaborados con mostacillas blancas, negras y doradas.</p>

          <div class="precio">$45.000</div>

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
          Son muy elegantes y combinan con todo.
        </div>

        <div class="comentario">
          <strong>Diana C</strong> ★★★★☆ <br>
          Muy lindos, iguales a la imagen.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
        </div>

        <button class="btn-enviar">Enviar Reseña</button>
      </div>
    </div>
  </section>

  <section id="producto4" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Bisuteria.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Bisuteria -4.png" alt="Aretes coloridos">
        </div>

        <div class="info-producto">
          <h1>Aretes Coloridos</h1>
          <p>Aretes artesanales con diseño colorido, elaborados con mostacillas.</p>

          <div class="precio">$48.000</div>

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
          <strong>Valentina S</strong> ★★★★★ <br>
          Los colores son hermosos y llamativos.
        </div>

        <div class="comentario">
          <strong>Luisa F</strong> ★★★★☆ <br>
          Me encantaron para una ocasión especial.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
        </div>

        <button class="btn-enviar">Enviar Reseña</button>
      </div>
    </div>
  </section>

  <section id="producto5" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Bisuteria.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Bisuteria -5.png" alt="Pulsera verde artesanal">
        </div>

        <div class="info-producto">
          <h1>Pulsera Verde Artesanal</h1>
          <p>Pulsera elaborada con cuentas verdes y negras, ideal para uso diario.</p>

          <div class="precio">$30.000</div>

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
          <strong>María J</strong> ★★★★☆ <br>
          Muy cómoda y bonita.
        </div>

        <div class="comentario">
          <strong>Andrés T</strong> ★★★★★ <br>
          Excelente producto artesanal.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
        </div>

        <button class="btn-enviar">Enviar Reseña</button>
      </div>
    </div>
  </section>

  <section id="producto6" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="Bisuteria.html" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="Imagenes/Bisuteria -6png.png" alt="Manillas tejidas">
        </div>

        <div class="info-producto">
          <h1>Manillas Tejidas</h1>
          <p>Set de manillas artesanales tejidas con diseños coloridos y tradicionales.</p>

          <div class="precio">$38.000</div>

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
          <strong>Camila V</strong> ★★★★★ <br>
          Me gustó mucho el set, los colores son preciosos.
        </div>

        <div class="comentario">
          <strong>Felipe G</strong> ★★★★☆ <br>
          Buen producto y buen acabado.
        </div>
      </div>

      <div class="reseña-box">
        <textarea placeholder="Deja tu comentario:"></textarea>

        <div class="estrellas">
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
          <span>★</span>
        </div>

        <button class="btn-enviar">Enviar Reseña</button>
      </div>
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