@extends('layouts.base')

@section('title', 'GestionApp - Modifier un produit')

@section('content')
    <h1>Modifier un produit</h1>
    <form action="{{ route('produit.update', $produit->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $produit->nom }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input class="form-control" id="description" name="description" required></input>
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" value="{{ $produit->prix }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
