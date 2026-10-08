@extends('layouts.app')

@section('titulo', $producto->nombre)

@push('estilos')
<link rel="stylesheet" href="{{ asset('css/mostrar-producto.css') }}">
@endpush

@section('contenido')
<main>
    @include('partials.detalle-producto')
</main>
@endsection