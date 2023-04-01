@extends('layouts.base')

@section('title', 'ProduitApp - Accueil')

@section('content')
  <!-- Contenu de la vue -->
  
<h1>Détails du produit d'identifiant {{ $produit['id'] }}</h1>
<p>Nom : {{ $produit['nom'] }}</p>
<p>Prix : {{ $produit['prix'] }}</p>
<p>Description : {{$produit['description']}}</p>



@endsection
