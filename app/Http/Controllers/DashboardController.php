<?php

namespace App\Http\Controllers;

use App\Models\Produit;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $produits = Produit::all();

        // Return the dashboard view with the produits data
        return view('home.dashboard', compact('produits'));
    }
}
