<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;

class ProduitController extends Controller
{
    private $produit1 = ['id'=>1, 'nom'=>"iphone 12 pro", 'prix' =>280000];

    public function index()
    {
        $produits = Produit::all();
        return view('produit.index', ['produits' => $produits]);    
    }

    private $produits = [    
    ['id'=>1, 'nom'=>"iphone 12 pro", 'prix' =>280000],
    ['id' => 2, 'nom' => "Souris Logitech", 'prix' => 12900],
    ['id' => 3, 'nom' => "Montre Naviforce", 'prix' => 16500],
    ['id' => 4, 'nom' => "Casque Sony WH1000XM5", 'prix' => 340000],
    ['id' => 5, 'nom' => "Moniteur LG", 'prix' => 580000],
];
 
public function view($id)
{
    $produit = Produit::find($id);
  
    if ($produit) {
        return view('produit.view', ['produit'=>$produit]);
    } else {
        return response("Produit d'identifiant $id non trouvé.", 404)
            ->header('Content-Type', 'text/plain');
    } 
}

public function add(Request $request)
{
    $newProduit = new Produit;
    $newProduit->nom = $request->nom;
    $newProduit->prix = $request->prix;
    $newProduit->description=$request->description;
    $newProduit->save();

    return redirect()->route('produit.index');
}
public function getOne($id)
{
    $produit=Produit::find($id);
    if(!$produit)
    {
        return response ("Aucun produit trouvé avec l'identifiant $id", 404);
    }
    return $produit;
}
public function create()
{
    return view('produit.ajouter');
}
public function supprimer($id)
{
    $produit = Produit::find($id);

    if ($produit) {
        $produit->delete();
    }

    return redirect()->route('produit.index');
}
public function modifier($id)
{
    $produit = Produit::find($id);
    return view('produit.modifier', ['produit' => $produit]);
}
public function update(Request $request, $id)
{
    $produit = Produit::find($id);
    $produit->nom = $request->input('nom');
    $produit->description = $request->input('description');
    $produit->prix = $request->input('prix');
    $produit->save();
    return redirect()->route('produit.index');
}
public function rechercher(Request $request)
{
    $produits = Produit::where('nom', 'LIKE', '%'.$request->input('search').'%')->get();
    
    if($produits->isEmpty()) {
        return response("Produit introuvable", 404);
    }

    return view('produit.rechercher', compact('produits'));
}



}