<?php
namespace App\Http\Controllers;

use App\Models\ContaReceber;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContaReceberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contasReceber = ContaReceber::all();
        return response()->json(['data' => $contasReceber], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contaReceber = ContaReceber::create($request->all());
        return response()->json(['data' => $contaReceber], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(ContaReceber $contaReceber)
    {
        return response()->json(['data' => $contaReceber], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContaReceber $contaReceber)
    {
        $contaReceber->update($request->all());
        return response()->json(['data' => $contaReceber], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContaReceber $contaReceber)
    {
        $contaReceber->delete();
        return response()->json(null, 204);
    }
}