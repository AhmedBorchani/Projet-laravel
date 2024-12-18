@extends('welcome')

@section('title', 'Dashboard')



@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Dashboard - Gestion des Produits</h1>

    {{-- Afficher les messages de succès --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Formulaire d'ajout de produit --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white">Ajouter un produit</div>
        <div class="card-body">
            <form action="{{ route('produits.store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nom du produit</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Entrez le nom du produit" required>
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Prix</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Prix en EUR" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="quantity" class="form-label">Quantité</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantité en stock" required>
                    </div>
                    <div class="col-md-6">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="2" placeholder="Description du produit"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-success w-100">Ajouter</button>
            </form>
        </div>
    </div>

    {{-- Liste des produits --}}
    <div class="card shadow-sm">
        <div class="card-header bg-secondary text-white">Liste des produits</div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produits as $produit)
                        <tr>
                            <td>{{ $produit->id }}</td>
                            <td>{{ $produit->name }}</td>
                            <td>{{ $produit->description }}</td>
                            <td>{{ $produit->price }} €</td>
                            <td>{{ $produit->quantity }}</td>
                            <td>
                                <a href="{{ route('produits.edit', $produit->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                                <form action="{{ route('produits.destroy', $produit) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Voulez-vous supprimer ce produit ?')">
                                        Supprimer
                                    </button>
                                </form>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if($produits->isEmpty())
                <div class="alert alert-info text-center mt-3">Aucun produit disponible pour le moment.</div>
            @endif
        </div>
    </div>
</div>
@endsection


