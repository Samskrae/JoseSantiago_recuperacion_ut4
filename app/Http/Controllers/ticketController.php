<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;


class ticketController extends Controller
{
    public function index()
    {
        $productos = Product::all();
        return view('tickets', compact('productos'));
    }
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('productos.index')->with(
            'success',
            'Ticket guardado'
        );
    }
}