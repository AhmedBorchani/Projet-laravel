@extends('welcome')

@section('title', 'Modifier le produit')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Modifier le produit</h1>

    {{-- Afficher les messages de succès --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Formulaire de modification de produit --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white">Modifier le produit</div>
        <div class="card-body">
            <form action="{{ route('produits.update', $produit->id) }}" method="POST">
                @csrf
                @method('PUT') 
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nom du produit</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $produit->name) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Prix</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $produit->price) }}" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="quantity" class="form-label">Quantité</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $produit->quantity) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="2">{{ old('description', $produit->description) }}</textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100">Mettre à jour</button>
            </form>
        </div>
    </div>
</div>
@endsection
