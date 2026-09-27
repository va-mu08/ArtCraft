@extends('layouts.app')

@section('titulo', 'Producto - Bisuteria')

@push('estilos')
<link rel="stylesheet" href="{{ asset('css/pagar.css') }}">
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
      <a href="{{ route('bisuteria') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Bisuteria-1.jpg') }}" alt="Pulsera artesanal rosada">
        </div>

        <div class="info-producto">
          <h1>Pulsera Artesanal Rosada</h1>
          <p>Pulsera elaborada a mano con tejido artesanal y detalles en color rosado.</p>

          <div class="precio">$35.000</div>

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
      <a href="{{ route('bisuteria') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Bisuteria-2ng.jpg') }}" alt="Pulsera artesanal cafe">
        </div>

        <div class="info-producto">
          <h1>Pulsera Artesanal Café</h1>
          <p>Pulsera tejida a mano con tonos cafés y diseño artesanal tradicional.</p>

          <div class="precio">$32.000</div>

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
      <a href="{{ route('bisuteria') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Bisuteria-3.jpg') }}" alt="Aretes blancos artesanales">
        </div>

        <div class="info-producto">
          <h1>Aretes Blancos Artesanales</h1>
          <p>Aretes largos elaborados con mostacillas blancas, negras y doradas.</p>

          <div class="precio">$45.000</div>

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
      <a href="{{ route('bisuteria') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Bisuteria-4.jpg') }}" alt="Aretes coloridos">
        </div>

        <div class="info-producto">
          <h1>Aretes Coloridos</h1>
          <p>Aretes artesanales con diseño colorido, elaborados con mostacillas.</p>

          <div class="precio">$48.000</div>

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
      <a href="{{ route('bisuteria') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Bisuteria-5.jpg') }}" alt="Pulsera verde artesanal">
        </div>

        <div class="info-producto">
          <h1>Pulsera Verde Artesanal</h1>
          <p>Pulsera elaborada con cuentas verdes y negras, ideal para uso diario.</p>

          <div class="precio">$30.000</div>

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
      <a href="{{ route('bisuteria') }}" class="volver">
        <i class="fa-solid fa-arrow-left"></i>
      </a>

      <div class="seccion-superior">
        <div class="imagen-producto">
          <img src="{{ asset('imagenes/Bisuteria-6png.jpg') }}" alt="Manillas tejidas">
        </div>

        <div class="info-producto">
          <h1>Manillas Tejidas</h1>
          <p>Set de manillas artesanales tejidas con diseños coloridos y tradicionales.</p>

          <div class="precio">$38.000</div>

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
@endsection
