<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
{
    $produits = Produit::all(); 
    return view('home.dashboard', compact('produits'));  
}


    public function create()
    {
        return view('dashboard.produits.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        Produit::create($request->all());
        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès.');
    } 
 

    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'Produit supprimé.');
    } 
 
    public function edit($id)
        {
            $produit = Produit::findOrFail($id);  
            return view('home.produitedit', compact('produit'));  
        }
    
    public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'description' => 'nullable|string',
            ]);

            $produit = Produit::findOrFail($id);
            $produit->name = $request->name;
            $produit->price = $request->price;
            $produit->quantity = $request->quantity;
            $produit->description = $request->description;
            $produit->save();

            return redirect()->route('dashboard')->with('success', 'Produit mis à jour avec succès.');
        }

}

