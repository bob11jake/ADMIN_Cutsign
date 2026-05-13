<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; // Importamos el modelo para hablar con la base de datos

class UsuarioController extends Controller
{
    // 1. LISTAR TODOS (Read)
    public function index()
    {
        $usuarios = Usuario::all(); // Busca todos los usuarios
        return response()->json($usuarios); // Los devuelve en formato JSON
    }

    // 2. CREAR UNO NUEVO (Create)
public function store(Request $request)
{
    // Intentamos obtener el dato de tres formas distintas
    $nombre = $request->json('nombre_usuario') 
              ?? $request->input('nombre_usuario') 
              ?? $request->post('nombre_usuario');

    if (!$nombre) {
        return response()->json([
            'error' => 'El servidor no recibió el campo nombre_usuario',
            'debug_recibido' => $request->all(),
            'content_type' => $request->header('Content-Type')
        ], 400);
    }

    try {
        $usuario = new \App\Models\Usuario();
        $usuario->nombre_usuario = $nombre;
        $usuario->save();

        return response()->json([
            'res' => true,
            'mensaje' => 'Guardado correctamente',
            'data' => $usuario
        ], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 500);
    }
}

    // 3. MOSTRAR UNO SOLO (Read)
    public function show($id)
    {
        $usuario = Usuario::find($id); // Busca por ID
        return response()->json($usuario);
    }

    // 4. ACTUALIZAR (Update)
    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        $usuario->update($request->all()); // Actualiza con los datos nuevos
        return response()->json([
            'mensaje' => 'Usuario actualizado',
            'datos' => $usuario
        ]);
    }

    // 5. BORRAR (Delete)
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete(); // Lo elimina de la base de datos
        return response()->json([
            'mensaje' => 'Usuario eliminado correctamente'
        ]);
    }
}