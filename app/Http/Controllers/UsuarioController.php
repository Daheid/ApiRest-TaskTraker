<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioResquest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return response()->json(["mensaje" => 'hola'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsuarioResquest $request)
    {
        try {

            $validatedData = $request->validated();

            // Crear un nuevo usuario con los datos validados
            $user = User::create($validatedData);

            // $usuario = User::create([
            //     'name' => $request->name,
            //     'password' => $request->password
            // ]);

            return response()->json([
                'Status' => 'Usuario Creado',
                'Datos creados' => $user,
                'token' => $user->createToken("TOken Name")->plainTextToken
            ], 200);
        } catch (Exception $e) {
            return response()->json($e, 400);
        };
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
