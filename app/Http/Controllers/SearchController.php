<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $plants = Plant::where('name', 'LIKE', "%{$query}%")
            ->orWhere('disease_name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('chemical_treatment', 'LIKE', "%{$query}%")
            ->orWhere('treatment_quantity', 'LIKE', "%{$query}%")
            ->orWhere('preventive_measures', 'LIKE', "%{$query}%")
            ->get();

        return view('biblioteca', compact('plants', 'query'));
    }
}