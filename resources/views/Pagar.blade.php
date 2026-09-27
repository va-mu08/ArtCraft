<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Art Craft - Pagar</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/Pagar.css') }}">
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

      <a href="Carrito.html">
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

<main class="checkout-container">
  <section class="billing-details">
    <h2>Detalles de facturación</h2>
    
    <label>Nombre *</label>
    <input type="text" placeholder="Nombre">
    
    <label>Apellidos *</label>
    <input type="text" placeholder="Apellidos">
    
    <label>Correo electrónico *</label>
    <input type="email" placeholder="tuemail@ejemplo.com">
    
    <label>Teléfono *</label>
    <input type="text" placeholder="+57">
    
    <label>Dirección *</label>
    <input type="text" placeholder="Número de casa y calle">
    
    <label>Ciudad *</label>
    <input type="text" placeholder="Ciudad">
  </section>

  <section class="order-summary">
    <h2>Tu pedido</h2>
    <table>
      <tr>
        <th>Producto</th>
        <th>Subtotal</th>
      </tr>
      <tr>
        <td>Producto seleccionado × 1</td>
        <td>$</td>
      </tr>
      <tr>
        <td>Subtotal</td>
        <td>$</td>
      </tr>
      <tr>
        <td>Envío</td>
        <td>Gratuito</td>
      </tr>
    </table>
    <p class="total">Total: $</p>

    <div class="payment-methods">
      <h3>Método de pago</h3>
      
      <input type="radio" name="metodo-pago" id="tab-tarjeta" checked>
      <input type="radio" name="metodo-pago" id="tab-transferencia">
      <input type="radio" name="metodo-pago" id="tab-contraentrega">

      <div class="tabs">
        <label for="tab-tarjeta" class="tab-label label-tarjeta">Tarjeta de crédito/débito</label>
        <label for="tab-transferencia" class="tab-label label-transferencia">Transferencia Bancaria</label>
        <label for="tab-contraentrega" class="tab-label label-contraentrega">Pago Contraentrega</label>
      </div>

      <div class="payment-content">
        
        <div class="payment-section seccion-tarjeta">
          <div class="card-logos-inline">
            <img src="Imagenes/Visa.png" alt="Visa">
            <img src="Imagenes/Mastercard.png" alt="Mastercard">
            <img src="Imagenes/America express.png" alt="Amex">
          </div>
          <label>Nombre de la Tarjeta</label>
          <input type="text" placeholder="Nombre completo">
          
          <label>Número de la tarjeta</label>
          <input type="text" placeholder="1234 456 45678">
          
          <label>Vencimiento</label>
          <div class="expiry">
            <input type="text" placeholder="MM">
            <input type="text" placeholder="AA">
            <input type="text" placeholder="CVV">
          </div>
        </div>

        <div class="payment-section seccion-transferencia">
          <p>Realiza tu pago mediante transferencia bancaria a la siguiente cuenta:</p>
          <ul>
            <li><strong>Banco:</strong> Bancolombia</li>
            <li><strong>Tipo de cuenta:</strong> Ahorros</li>
            <li><strong>Número:</strong> 123-456-789</li>
            <li><strong>Titular:</strong> Art Craft S.A.S.</li>
          </ul>
          <p>Envía el comprobante al correo <strong>artcraft@gmail.com</strong>.</p>
        </div>

        <div class="payment-section seccion-contraentrega">
          <p>Tu pedido será entregado en la dirección registrada y podrás pagar en efectivo directamente al recibirlo en tu hogar.</p>
        </div>

      </div>

      <button class="pay-btn">Realizar el pedido</button>
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
      <h2>SÍGUENOS</h2>
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
        <a href=""><i class="fa-brands fa-cc-visa"></i></a>
        <a href=""><i class="fa-brands fa-cc-mastercard"></i></a>
        <a href="#" class="nequi">N</a>
        <a href=""><i class="fa-solid fa-building-columns"></i></a>
      </div>
    </div>
  </div>
  <div class="grupo-2">
    <small>&copy; 2026 <b>Art Craft</b> - Todos los Derechos Reservados.</small>
  </div>
</footer>

</body>
</html>