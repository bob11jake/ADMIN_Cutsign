<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contenido; 

class ContenidoController extends Controller
{
    public function index() {
        return response()->json(Contenido::all());
    }

    public function store(Request $request) {
        $contenido = Contenido::create($request->all());
        return response()->json($contenido);
    }

    public function show($id) {
        return response()->json(Contenido::find($id));
    }

    public function update(Request $request, $id) {
        $contenido = Contenido::find($id);
        $contenido->update($request->all());
        return response()->json($contenido);
    }

    public function destroy($id) {
        $contenido = Contenido::find($id);
        $contenido->delete();
        return response()->json(['mensaje' => 'Contenido eliminado correctamente']);
    }
}