<?php

namespace App\Http\Controllers;

class ProductosController
{
    function index()
    {
        return view('homeProductos');
    }

    function listar()
    {
        return view('listarProductos');
    }

    function guardar()
    {
        return view('guardarProducto');
    }

    function ver()
    {
        return view('verProducto');
    }
}
