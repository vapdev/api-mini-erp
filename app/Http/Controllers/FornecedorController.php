<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return response()->json(['data' => $fornecedores], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string',
            'email' => 'required|email|unique:fornecedores',
            // Add validation rules for other fields
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $fornecedor = Fornecedor::create($request->all());
        return response()->json(['data' => $fornecedor], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fornecedor = Fornecedor::find($id);
        return response()->json(['data' => $fornecedor], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fornecedor = Fornecedor::find($id);
        $validator = Validator::make($request->only($fornecedor->getFillable()), [
            'nome' => 'string',
            'email' => 'email|unique:fornecedores,email,' . $fornecedor->id,
            // Add validation rules for other fields
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
    
        $fornecedor->update($request->only($fornecedor->getFillable()));
        return response()->json(['data' => $fornecedor], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fornecedor $fornecedor)
    {
        $fornecedor->delete();
        return response()->json(null, 204);
    }
}