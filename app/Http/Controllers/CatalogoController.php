<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function categorias(Request $request): View
    {
        return view('categorias', [
            'productos' => $this->productos('Mochilas', $request->q),
            'categoriaActual' => 'Mochilas',
            'busqueda' => $request->q,
        ]);
    }

    public function bisuteria(Request $request): View
    {
        return view('bisuteria', [
            'productos' => $this->productos('Bisutería', $request->q),
            'categoriaActual' => 'Bisutería',
            'busqueda' => $request->q,
        ]);
    }

    public function ceramica(Request $request): View
    {
        return view('ceramica', [
            'productos' => $this->productos('Cerámica', $request->q),
            'categoriaActual' => 'Cerámica',
            'busqueda' => $request->q,
        ]);
    }

    public function mascaras(Request $request): View
    {
        return view('mascaras', [
            'productos' => $this->productos('Máscaras', $request->q),
            'categoriaActual' => 'Máscaras',
            'busqueda' => $request->q,
        ]);
    }

    public function mostrarProducto(): View
    {
        return view('mostrar-producto');
    }

    public function mostrarBisuteria(): View
    {
        return view('mostrar-bisuteria');
    }

    public function mostrarCeramica(): View
    {
        return view('mostrar-ceramica');
    }

    public function mostrarMascaras(): View
    {
        return view('mostrar-mascaras');
    }

    private function productos(string $categoria, ?string $busqueda = null)
    {
        return Producto::deCategoria($categoria)
            ->when($busqueda, fn ($query) => $query->where('nombre', 'like', '%'.$busqueda.'%'))
            ->get();
    }
}
