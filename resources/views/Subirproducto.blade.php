<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>ART CRAFT</title>


<link rel="stylesheet" href="{{ asset('css/Subirproducto.css') }}">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

<div class="contenedor">
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

    <section class="titulo">
        <h1>Subir nuevo producto</h1>
        <p>Muestra tu arte al mundo</p>
    </section>

    <section class="contenido">

        <div class="formulario">
            <label>Nombre del producto</label>
            <input type="text" placeholder="Ingresa el nombre del producto...">
            <label>Categoria</label>
            <select>
                <option>Seleccionar categoria</option>
                <option>Tejidos</option>
                <option>Cerámica</option>
                <option>Madera</option>
                <option>Joyería</option>
                <option>Pinturas</option>
                <option>Decoración</option>
                <option>Mochilas</option>
                <option>Accesorios</option>
            </select>

            <label>Descripción</label>

            <textarea placeholder="Descripción del producto..."></textarea>

            <label>Precio</label>

            <input type="text" placeholder="Digite el valor del producto...">

            <label for="imagen" class="subir">
                <i class="fa-solid fa-upload"></i>
                Subir Imagen
            </label>

            <input type="file" id="imagen" hidden>

            <button class="publicar">
                PUBLICAR PRODUCTO
            </button>

        </div>
        <div class="preview">
            <h2>Vista Previa</h2>
            <img src="Imagenes/Mochila.png" alt="" class="producto">
            <h3>Mochila Wayuu</h3>
            <p>Precio: $450.000</p>
            <p>Categoria: Tejidos</p>

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
        </div> <!-- cierre correcto de grupo-1 -->

        <div class="grupo-2">
            <small>&copy; 2026 <b>Art Craft</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>



</body>
</html>
