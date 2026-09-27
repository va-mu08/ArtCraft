<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio');
});

Route::get('/acceso', function () {
    return view('Acceso');
});

Route::get('/bisuteria', function () {
    return view('Bisuteria');
});

Route::get('/bloghistoria', function () {
    return view('bloghistoria');
});

Route::get('/carritoartesano', function () {
    return view('Carritoartesano');
});

Route::get('/categorias', function () {
    return view('Categorias');
});

Route::get('/ceramica', function () {
    return view('Ceramica');
});

Route::get('/contacto', function () {
    return view('Contacto');
});

Route::get('/inicio', function () {
    return view('Inicio');
});

Route::get('/mascaras', function () {
    return view('Mascaras');
});

Route::get('/mostrarbisuteria', function () {
    return view('MostrarBisuteria');
});

Route::get('/mostrarceramica', function () {
    return view('MostrarCeramica');
});

Route::get('/mostrarmascaras', function () {
    return view('MostrarMascaras');
});

Route::get('/mostrarproducto', function () {
    return view('MostrarProducto');
});

Route::get('/pagar', function () {
    return view('Pagar');
});

Route::get('/perfilartesano', function () {
    return view('PerfilArtesano');
});

Route::get('/registrousuario', function () {
    return view('RegistroUsuario');
});

Route::get('/sobrenosotros', function () {
    return view('SobreNosotros');
});

Route::get('/subirproducto', function () {
    return view('Subirproducto');
});


