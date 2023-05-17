<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;


class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function find($id)
    {
        $factura = Factura::find($id);
        if (is_null($factura)) {
            return response()->json(["message" => "Registro no Existe."], 404);
        } else {
            return response()->json($factura, 200);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $factura = Factura::create($request->all());
        return response()->json($factura, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Factura $factura)
    {
        return  response()->json(Factura::all(), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factura $factura)
    {
        //
    }
}
