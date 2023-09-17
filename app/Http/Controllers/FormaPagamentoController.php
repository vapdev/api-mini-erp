<?php
namespace App\Http\Controllers;

use App\Models\FormaPagamento;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormaPagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formasPagamento = FormaPagamento::all();
        return response()->json(['data' => $formasPagamento], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formaPagamento = FormaPagamento::create($request->all());
        return response()->json(['data' => $formaPagamento], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(FormaPagamento $formaPagamento)
    {
        return response()->json(['data' => $formaPagamento], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FormaPagamento $formaPagamento)
    {
        $formaPagamento->update($request->all());
        return response()->json(['data' => $formaPagamento], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FormaPagamento $formaPagamento)
    {
        $formaPagamento->delete();
        return response()->json(null, 204);
    }
}
