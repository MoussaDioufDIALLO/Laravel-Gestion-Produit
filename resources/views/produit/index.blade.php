 
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @extends('layouts.base')

@section('title', 'ProduitApp - Accueil')

@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<form action="{{ route('produit.rechercher') }}" method="POST">
    @csrf
    <div class="input-group p-3">
        <input type="text" class="form-control" name="search" placeholder="Chercher un produit par son nom">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
        </div>
    </div>
</form>

<table class="table table-striped table-hover">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">Prix</th>
            <th scope="col">Détail</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produits as $produit)
        <tr>
            <td>{{ $produit->nom }}</td>
            <td>{{ $produit->prix }} FCFA</td>
            <td>
                <a href="{{ route('produit.view', ['id'=>$produit->id]) }}" class="btn btn-info">Détail</a>
            </td>
            <td>
                <a href="{{ route('produit.modifier', ['id'=>$produit->id]) }}" class="btn btn-primary">Modifier</a>
            </td>
            <td>
                <form action="{{ route('produit.supprimer', $produit->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</head>
<body>
    
</body>
 

<style>
    body
    {
        background: #66CDAA;
    }
    th, tr, td 
    {
        border: 2px solid black;
    }
    td 
    {
        text-align: center;
    }
    th 
    {
        text-align: center;
    }
</style>
