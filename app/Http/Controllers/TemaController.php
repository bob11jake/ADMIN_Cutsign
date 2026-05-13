<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tema; 

class TemaController extends Controller
{
    public function index() {
        return response()->json(Tema::all());
    }

    public function store(Request $request) {
        $tema = Tema::create($request->all());
        return response()->json($tema);
    }

    public function show($id) {
        return response()->json(Tema::find($id));
    }

    public function update(Request $request, $id) {
        $tema = Tema::find($id);
        $tema->update($request->all());
        return response()->json($tema);
    }

    public function destroy($id) {
        $tema = Tema::find($id);
        $tema->delete();
        return response()->json(['mensaje' => 'Tema eliminado correctamente']);
    }
}