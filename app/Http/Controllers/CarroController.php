<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index()
    {
        // Obtener todos los registros de la tabla carros
        $carros = Carro::all();
        return view('carros.index', compact('carros'));
    }

    public function create()
    {
        return view('carros.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'kilometraje' => 'required|integer|min:0',
        ]);

        Carro::create($validated);

        return redirect()->route('carros.index')->with('success', 'Carro registrado correctamente.');
    }

    public function edit(Carro $carro)
    {
        return view('carros.edit', compact('carro'));
    }

    public function update(Request $request, Carro $carro)
    {
        $validated = $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer|min:1900|max:' . date('Y'),
            'color' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
            'kilometraje' => 'required|integer|min:0',
        ]);

        $carro->update($validated);

        return redirect()->route('carros.index')->with('success', 'Carro actualizado correctamente.');
    }

    public function destroy(Carro $carro)
    {
        $carro->delete();

        return redirect()->route('carros.index')->with('success', 'Carro eliminado correctamente.');
    }
}
