<?php

namespace App\Http\Controllers;

use App\Models\ContaPagar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContaPagarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contasPagar = ContaPagar::all();
        return response()->json(['data' => $contasPagar], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contaPagar = ContaPagar::create($request->all());
        return response()->json(['data' => $contaPagar], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ContaPagar $contaPagar)
    {
        return response()->json(['data' => $contaPagar], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContaPagar $contaPagar)
    {
        $contaPagar->update($request->all());
        return response()->json(['data' => $contaPagar], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContaPagar $contaPagar)
    {
        $contaPagar->delete();
        return response()->json(null, 204);
    }
}