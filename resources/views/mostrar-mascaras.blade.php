@extends('layouts.app')

@section('titulo', 'Producto - Mascaras')

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
      <a href="{{ route('mascaras') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Mascara-1.jpg') }}" alt="Máscara ceremonial con tocado">
        </div>

        <div class="info-producto">
          <h1>Máscara Ceremonial con Tocado</h1>
          <p>Máscara artesanal tallada con detalles coloridos en la parte superior, inspirada en expresiones culturales tradicionales.</p>

          <div class="precio">$95.000</div>

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
      <a href="{{ route('mascaras') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Mascara-2.jpg') }}" alt="Máscara mitad madera mitad negra">
        </div>

        <div class="info-producto">
          <h1>Máscara Doble Tono</h1>
          <p>Máscara artesanal con diseño dividido en dos tonos, combinando apariencia natural de madera con acabado oscuro.</p>

          <div class="precio">$88.000</div>

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
      <a href="{{ route('mascaras') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Mascara-3.jpg') }}" alt="Máscara multicolor decorativa">
        </div>

        <div class="info-producto">
          <h1>Máscara Multicolor Decorativa</h1>
          <p>Máscara artesanal con diseño colorido y expresivo, ideal para decorar espacios con identidad cultural.</p>

          <div class="precio">$92.000</div>

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
      <a href="{{ route('mascaras') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Mascara-4.jpg') }}" alt="Máscara alargada artesanal">
        </div>

        <div class="info-producto">
          <h1>Máscara Alargada Artesanal</h1>
          <p>Máscara de forma alargada con detalles cálidos y expresivos, elaborada para decoración artesanal.</p>

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
      <a href="{{ route('mascaras') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Mascara-5.jpg') }}" alt="Máscara negra tallada">
        </div>

        <div class="info-producto">
          <h1>Máscara Negra Tallada</h1>
          <p>Máscara artesanal de tono oscuro con detalles tallados, perfecta para espacios con estilo tradicional.</p>

          <div class="precio">$85.000</div>

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
      <a href="{{ route('mascaras') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Mascara-6.jpg') }}" alt="Máscara verde tradicional">
        </div>

        <div class="info-producto">
          <h1>Máscara Verde Tradicional</h1>
          <p>Máscara artesanal con tonos verdes, rojos y amarillos, inspirada en diseños tradicionales y decorativos.</p>

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
@endsection
