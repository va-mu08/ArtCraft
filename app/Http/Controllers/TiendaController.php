<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class TiendaController extends Controller
{
    public function carrito(): View
    {
        return view('carrito');
    }

    public function pagar(): View
    {
        return view('pagar');
    }
}
