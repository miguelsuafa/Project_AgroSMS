<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['details']);
        // $this->middleware('auth');
    }

    // Listar todas las plantas
    public function index()
    {
        $plants = Plant::all();
        return view('plants.index', compact('plants'));
    }

    // Mostrar una planta específica
    public function show($id)
    {
        $plant = Plant::findOrFail($id);
        return view('plants.show', compact('plant'));
        // return view('plants.plant-details', compact('plant'));
    }

    // Mostrar el formulario para crear una nueva planta
    public function create()
    {
        return view('plants.create');
    }

    // Almacenar una nueva planta
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'disease_name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'chemical_treatment' => 'nullable|string',
            'treatment_quantity' => 'nullable|string',
            'preventive_measures' => 'nullable|string',
        ]);

        $plant = new Plant($request->all());

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
            $plant->image = basename($imagePath);
        }

        $plant->save();

        return redirect()->route('plants.show', $plant->id)
            ->with('success', 'Planta creada exitosamente.');
    }

    // Mostrar el formulario para editar una planta existente
    public function edit($id)
    {
        $plant = Plant::findOrFail($id);
        return view('plants.edit', compact('plant'));
    }

    // Actualizar una planta existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'disease_name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'chemical_treatment' => 'nullable|string',
            'treatment_quantity' => 'nullable|string',
            'preventive_measures' => 'nullable|string',
        ]);

        $plant = Plant::findOrFail($id);
        $plant->fill($request->all());

        if ($request->hasFile('image')) {
            if ($plant->image) {
                Storage::delete('images/' . $plant->image);
            }
            $imagePath = $request->file('image')->move(public_path('images'), $request->file('image')->getClientOriginalName());
            $plant->image = basename($imagePath);
        }

        $plant->save();

        return redirect()->route('plants.show', $plant->id)
            ->with('success', 'Planta actualizada exitosamente.');
    }

    // Eliminar una planta existente
    public function destroy($id)
    {
        $plant = Plant::findOrFail($id);
        if ($plant->image) {
            Storage::delete('images/' . $plant->image);
        }
        $plant->delete();

        return redirect()->route('plants.index')
            ->with('success', 'Planta eliminada exitosamente.');
    }

    // Método de búsqueda de plantas
    public function search(Request $request)
    {
        $query = $request->input('query');
    
        if ($query) {
            $plants = Plant::where('name', 'LIKE', "%{$query}%")
                           ->orWhere('disease_name', 'LIKE', "%{$query}%")
                           ->get();
        } else {
            $plants = Plant::all();
        }
    
        return view('plants.index', compact('plants', 'query'));
    }
    
    // Mostrar detalles de la planta nuevo
    public function details($id)
    {
        $plant = Plant::findOrFail($id);
        return view('plants.details', compact('plant'));
    }

    // Mostrar los detalles de cada planta 
        public function searchShow($id)
        {
            $plant = Plant::findOrFail($id);
            return view('plants.show', compact('plant'));
        }
}
