<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progreso; 

class ProgresoController extends Controller
{
    public function index() {
        return response()->json(Progreso::all());
    }

    public function store(Request $request) {
        $progreso = Progreso::create($request->all());
        return response()->json($progreso);
    }

    public function show($id) {
        return response()->json(Progreso::find($id));
    }

    public function update(Request $request, $id) {
        $progreso = Progreso::find($id);
        $progreso->update($request->all());
        return response()->json($progreso);
    }

    public function destroy($id) {
        $progreso = Progreso::find($id);
        $progreso->delete();
        return response()->json(['mensaje' => 'Progreso eliminado correctamente']);
    }
}