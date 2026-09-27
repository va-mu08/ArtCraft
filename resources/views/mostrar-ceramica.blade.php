@extends('layouts.app')

@section('titulo', 'Producto - Ceramica')

@push('estilos')
<link rel="stylesheet" href="{{ asset('css/mostrar-producto.css') }}">
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
@endpush

@section('contenido')
<section id="producto1" class="producto-detalle">
    <div class="tarjeta-producto">
      <a href="{{ route('ceramica') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Ceramica-1.jpg') }}" alt="Juego de tazas artesanales">
        </div>

        <div class="info-producto">
          <h1>Juego de Tazas Artesanales</h1>
          <p>Juego de tazas elaboradas en cerámica artesanal, con acabado rústico y colores cálidos ideales para bebidas calientes.</p>

          <div class="precio">$75.000</div>

          <a href="{{ route('carrito') }}" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="{{ route('pagar') }}" class="btn btn-comprar">
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
          Las tazas son hermosas y tienen muy buen acabado.
        </div>

        <div class="comentario">
          <strong>Manuel N</strong> ★★★★☆ <br>
          Me encantaron los colores y el estilo artesanal.
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
      <a href="{{ route('ceramica') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Ceramica-2.jpg') }}" alt="Plato decorativo artesanal">
        </div>

        <div class="info-producto">
          <h1>Plato Decorativo Artesanal</h1>
          <p>Plato de cerámica con diseño floral en tonos oscuros, ideal para decoración o uso especial en mesa.</p>

          <div class="precio">$60.000</div>

          <a href="{{ route('carrito') }}" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="{{ route('pagar') }}" class="btn btn-comprar">
            <i class="fa-solid fa-house"></i>
            Comprar ahora
          </a>
        </div>
      </div>

      <div class="opiniones">
        <h2>Opiniones de nuestros clientes</h2>
        <div class="calificacion">4.9 ★★★★★</div>

        <div class="comentario">
          <strong>Ana P</strong> ★★★★★ <br>
          El diseño del plato es muy elegante.
        </div>

        <div class="comentario">
          <strong>Carlos M</strong> ★★★★☆ <br>
          Muy bonito para decorar la mesa.
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
      <a href="{{ route('ceramica') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Ceramica-3.jpg') }}" alt="Set de cuencos con cucharas">
        </div>

        <div class="info-producto">
          <h1>Set de Cuencos con Cucharas</h1>
          <p>Set de cuencos pequeños en cerámica con cucharas de madera, ideal para salsas, dulces o entradas.</p>

          <div class="precio">$58.000</div>

          <a href="{{ route('carrito') }}" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="{{ route('pagar') }}" class="btn btn-comprar">
            <i class="fa-solid fa-house"></i>
            Comprar ahora
          </a>
        </div>
      </div>

      <div class="opiniones">
        <h2>Opiniones de nuestros clientes</h2>
        <div class="calificacion">4.7 ★★★★☆</div>

        <div class="comentario">
          <strong>Sofía R</strong> ★★★★★ <br>
          Son pequeños, prácticos y muy lindos.
        </div>

        <div class="comentario">
          <strong>Diana C</strong> ★★★★☆ <br>
          Me gustó mucho la combinación con madera.
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
      <a href="{{ route('ceramica') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Ceramica-4.jpg') }}" alt="Olla artesanal de barro">
        </div>

        <div class="info-producto">
          <h1>Olla Artesanal de Barro</h1>
          <p>Olla de barro elaborada artesanalmente, perfecta para decoración o preparación de comidas tradicionales.</p>

          <div class="precio">$90.000</div>

          <a href="{{ route('carrito') }}" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="{{ route('pagar') }}" class="btn btn-comprar">
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
          Muy bonita y resistente.
        </div>

        <div class="comentario">
          <strong>Luisa F</strong> ★★★★☆ <br>
          Tiene un acabado artesanal precioso.
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
      <a href="{{ route('ceramica') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Ceramica-5.jpg') }}" alt="Platos florales rojos">
        </div>

        <div class="info-producto">
          <h1>Set de Platos Florales</h1>
          <p>Set de platos decorativos en cerámica con diseño floral rojo, ideal para servir o decorar espacios especiales.</p>

          <div class="precio">$80.000</div>

          <a href="{{ route('carrito') }}" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="{{ route('pagar') }}" class="btn btn-comprar">
            <i class="fa-solid fa-house"></i>
            Comprar ahora
          </a>
        </div>
      </div>

      <div class="opiniones">
        <h2>Opiniones de nuestros clientes</h2>
        <div class="calificacion">4.9 ★★★★★</div>

        <div class="comentario">
          <strong>María J</strong> ★★★★★ <br>
          Los platos son hermosos y muy delicados.
        </div>

        <div class="comentario">
          <strong>Andrés T</strong> ★★★★☆ <br>
          Muy buen acabado y colores vivos.
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
      <a href="{{ route('ceramica') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Ceramica-6.png') }}" alt="Set de cuencos de barro">
        </div>

        <div class="info-producto">
          <h1>Set de Cuencos de Barro</h1>
          <p>Set de cuencos pequeños elaborados en barro artesanal, ideales para servir alimentos o decorar la mesa.</p>

          <div class="precio">$50.000</div>

          <a href="{{ route('carrito') }}" class="btn btn-carrito">
            <i class="fa-solid fa-cart-shopping"></i>
            Agregar al carrito
          </a>

          <a href="{{ route('pagar') }}" class="btn btn-comprar">
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
          Son sencillos, bonitos y útiles.
        </div>

        <div class="comentario">
          <strong>Felipe G</strong> ★★★★☆ <br>
          Buen producto artesanal.
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
@endsection
