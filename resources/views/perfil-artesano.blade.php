@extends('layouts.app')

@section('titulo', 'Perfil del artesano')

@push('estilos')
<link rel="stylesheet" href="{{ asset('css/perfil-artesano.css') }}">
@endpush

@section('contenido')
<section class="artisan-banner">
    <div class="banner-content">
        <h1>Perfil del Artesano</h1>
        <h2 class="artisan-name">María Gómez</h2>
        <p class="artisan-location">Artesana de Nariño</p>
    </div>

    <img src="{{ asset('imagenes/perfilArtesano2.jpg') }}" alt="María Gómez" class="banner-bg">
    <img src="{{ asset('imagenes/Artesana.png') }}" alt="María Gómez" class="banner-bg">

</section>

<main class="info-container">
    <section class="about-me">
        <h3>Sobre Mi</h3>
        <div class="highlight-box">
            <h4>Aprendimos de nuestros ancestros...</h4>
        </div>
        <p class="description">
            Llevo más de 30 años creando artesanías que cuentan la historia de mi tierra
        </p>
    </section>

    <section class="creations">
        <h3>Mis artesanías</h3>
        <div class="creations-grid">
            <img src="{{ asset('imagenes/Mochila.jpg') }}" alt="Mochila">
            <img src="{{ asset('imagenes/platos.jpg') }}" alt="Platos">
            <img src="{{ asset('imagenes/Jarron.jpg') }}" alt="Jarron">
            <img src="{{ asset('imagenes/Olla.jpg') }}" alt="Olla">
        </div>
    </section>
@endsection
