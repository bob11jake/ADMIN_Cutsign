<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nodo; 

class NodoController extends Controller
{
    public function index() {
        return response()->json(Nodo::all());
    }

    public function store(Request $request) {
        $nodo = Nodo::create($request->all());
        return response()->json($nodo);
    }

    public function show($id) {
        return response()->json(Nodo::find($id));
    }

    public function update(Request $request, $id) {
        $nodo = Nodo::find($id);
        $nodo->update($request->all());
        return response()->json($nodo);
    }

    public function destroy($id) {
        $nodo = Nodo::find($id);
        $nodo->delete();
        return response()->json(['mensaje' => 'Nodo eliminado correctamente']);
    }
}