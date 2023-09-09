<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = Funcionario::all();
        return response()->json(['data' => $funcionarios], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => 'required|string',
            'email' => 'required|email|unique:funcionarios',
            // Add validation rules for other fields
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $funcionario = Funcionario::create($request->all());
        return response()->json(['data' => $funcionario], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Funcionario $funcionario)
    {
        return response()->json(['data' => $funcionario], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funcionario $funcionario)
    {
        $validator = Validator::make($request->only($funcionario->getFillable()), [
            'nome' => 'string',
            'email' => 'email|unique:funcionarios,email,' . $funcionario->id,
            // Add validation rules for other fields
        ]);
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }
    
        $funcionario->update($request->only($funcionario->getFillable()));
        return response()->json(['data' => $funcionario], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return response()->json(null, 204);
    }
}