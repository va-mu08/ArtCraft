@extends('layouts.app')

@section('titulo', 'Carrito del artesano')

@push('estilos')
<link rel="stylesheet" href="{{ asset('css/carrito-artesano.css') }}">
@endpush

@section('contenido')
<section class="principal">
    <div class="productos">
      <h2>Tus Productos</h2>

      <div class="producto">
        <img src="{{ asset('imagenes/Mascara-1.jpg') }}" alt="Máscara ceremonial con tocado">
        <div class="detalle">
          <h3>Máscara ceremonial con tocado</h3>
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
        <img src="{{ asset('imagenes/Bisuteria-1.jpg') }}" alt="Pulsera artesanal rosada">
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
      <div class="fila"><span>Subtotal:</span><span>$160.000</span></div>
      <div class="fila"><span>Envío:</span><span>$10.000</span></div>
      <div class="fila"><span>Total:</span><span>$170.000</span></div>
      <a href="{{ route('pagar') }}" class="pagar">Ir a Pagar</a>
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
      <h2>Método de Pago</h2>
      <label><input type="radio" name="metodo"> Tarjeta de crédito/Débito</label>
      <label><input type="radio" name="metodo"> Transferencia Bancaria</label>
      <label><input type="radio" name="metodo"> Pago Contraentrega</label>
    </div>
  </section>
@endsection
