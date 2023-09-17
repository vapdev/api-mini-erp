<?php

namespace App\Http\Controllers;

use App\Models\Caixa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caixas = Caixa::all();
        return response()->json(['data' => $caixas], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $caixa = Caixa::create($request->all());
        return response()->json(['data' => $caixa], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Caixa $caixa)
    {
        return response()->json(['data' => $caixa], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Caixa $caixa)
    {
        $caixa->update($request->all());
        return response()->json(['data' => $caixa], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Caixa $caixa)
    {
        $caixa->delete();
        return response()->json(null, 204);
    }
}