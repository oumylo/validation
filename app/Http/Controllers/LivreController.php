<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;

class LivreController extends Controller
{

    public function index()
    {
        $livres = Livre::all(); 
        return view('livres.liste', compact('livres')); 
    }


    public function create()
    {
        return view('livres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'nombrepage' => 'required|integer',
        ]);

        Livre::create($request->all());

        return redirect()->route('livres.create')->with('success','Livre ajouté ');
    }
}
