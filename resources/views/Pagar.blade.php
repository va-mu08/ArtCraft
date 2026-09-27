@extends('layouts.app')

@section('titulo', 'Pagar')

@push('estilos')
<link rel="stylesheet" href="{{ asset('css/pagar.css') }}">
@endpush

@section('contenido')
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
            <img src="{{ asset('imagenes/Visa.png') }}" alt="Visa">
            <img src="{{ asset('imagenes/Mastercard.png') }}" alt="Mastercard">
            <img src="{{ asset('imagenes/america-express.png') }}" alt="Amex">
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
@endsection
