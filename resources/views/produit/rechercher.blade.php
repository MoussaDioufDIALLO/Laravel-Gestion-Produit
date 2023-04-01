@extends('layouts.base')

@section('title', 'GestionApp - Résultats de la recherche')

@section('content')
    <h1>Résultats de la recherche pour "{{ request('search') }}" :</h1>
    @if(session('message'))
        <div class="alert alert-danger">{{ session('message') }}</div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produits as $produit)
            <tr>
                <td>{{ $produit->nom }}</td>
                <td>{{ $produit->prix }} FCFA</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
