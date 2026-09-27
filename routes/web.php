<?php

use App\Http\Controllers\ArtesanoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\ContenidoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\TiendaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/inicio', [InicioController::class, 'index']);

Route::get('/categorias', [CatalogoController::class, 'categorias'])->name('categorias');
Route::get('/bisuteria', [CatalogoController::class, 'bisuteria'])->name('bisuteria');
Route::get('/ceramica', [CatalogoController::class, 'ceramica'])->name('ceramica');
Route::get('/mascaras', [CatalogoController::class, 'mascaras'])->name('mascaras');

Route::get('/mostrarproducto', [CatalogoController::class, 'mostrarProducto'])->name('mostrar-producto');
Route::get('/mostrarbisuteria', [CatalogoController::class, 'mostrarBisuteria'])->name('mostrar-bisuteria');
Route::get('/mostrarceramica', [CatalogoController::class, 'mostrarCeramica'])->name('mostrar-ceramica');
Route::get('/mostrarmascaras', [CatalogoController::class, 'mostrarMascaras'])->name('mostrar-mascaras');

Route::get('/carritoartesano', [TiendaController::class, 'carrito'])->name('carrito');
Route::get('/pagar', [TiendaController::class, 'pagar'])->name('pagar');

Route::get('/acceso', [AuthController::class, 'acceso'])->name('acceso');
Route::post('/acceso', [AuthController::class, 'login'])->name('login');
Route::get('/registrousuario', [AuthController::class, 'registro'])->name('registro');
Route::post('/registrousuario', [AuthController::class, 'registrar'])->name('registrar');

Route::get('/perfilartesano', [ArtesanoController::class, 'perfil'])->name('perfil-artesano');
Route::get('/subirproducto', [ArtesanoController::class, 'subirProducto'])->name('subir-producto');
Route::post('/subirproducto', [ArtesanoController::class, 'guardarProducto'])->name('guardar-producto');

Route::get('/bloghistoria', [ContenidoController::class, 'blog'])->name('blog');
Route::get('/contacto', [ContenidoController::class, 'contacto'])->name('contacto');
Route::post('/contacto', [ContenidoController::class, 'enviarMensaje'])->name('contacto.enviar');
Route::get('/sobrenosotros', [ContenidoController::class, 'sobreNosotros'])->name('sobre-nosotros');
