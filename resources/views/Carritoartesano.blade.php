<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Carrito del Artesano</title>

<link rel="stylesheet" href="{{ asset('css/Carritoartesano.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>

<div class="contenedor">

   
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


    
    <section class="principal">

        
        <div class="productos">

            <h2>Tus Productos</h2>

            <div class="producto">

                  <img src="/Imagenes/Mascara -1.png" alt="Máscara ceremonial con tocado">

                <div class="detalle">
                    <h3>Máscara seremonial con tocado</h3>
                    <p>$95.000</p>
                </div>

                <div class="cantidad">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                    <a href="#">Eliminar</a>
                </div>

            </div>

            <div class="producto">

                <img src="Imagenes/Bisuteria -1.png" alt="Pulsera artesanal rosada">

                <div class="detalle">
                    <h3>Pulsera artesanal rosada</h3>
                    <p>$35.000</p>
                </div>

                <div class="cantidad">
                    <button>-</button>
                    <span>1</span>
                    <button>+</button>
                    <a href="#">Eliminar</a>
                </div>

            </div>

        </div>

        <div class="resumen">

            <h2>Resumen de Pedido</h2>

            <div class="fila">
                <span>Subtotal:</span>
                <span>$160.000</span>
            </div>

            <div class="fila">
                <span>Envío:</span>
                <span>$10.000</span>
            </div>

            <div class="fila">
                <span>Total:</span>
                <span>$170.000</span>
            </div>
            <a href="Pagar.html">
            <button class="pagar">Ir a Pagar</button>
            </a>

        </div>
    </section>
    <section class="inferior">
        <div class="datos">
            <h2>Datos del Envío</h2>
            <p>Dirección de Envío</p>
            <input type="text" placeholder="Nombre Completo">
            <input type="text" placeholder="Teléfono">
            <input type="text" placeholder="Dirección">
        </div>
        
        <div class="pago">

            <h2>Datos del Envío</h2>

            <label>
              <input type="radio" name="metodo">
              Tarjeta de crédito/Débito
            </label>

            <label>
              <input type="radio" name="metodo">
              Transferencia Bancaria
            </label>

            <label>
              <input type="radio" name="metodo">
              Pago Contraentrega
            </label>

        </div>

    </section>

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