<?php
namespace App\Http\Controllers;

use App\Models\CaixaRegistro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaixaRegistroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caixaRegistros = CaixaRegistro::all();
        return response()->json(['data' => $caixaRegistros], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $caixaRegistro = CaixaRegistro::create($request->all());
        return response()->json(['data' => $caixaRegistro], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(CaixaRegistro $caixaRegistro)
    {
        return response()->json(['data' => $caixaRegistro], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CaixaRegistro $caixaRegistro)
    {
        $caixaRegistro->update($request->all());
        return response()->json(['data' => $caixaRegistro], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CaixaRegistro $caixaRegistro)
    {
        $caixaRegistro->delete();
        return response()->json(null, 204);
    }
}