<!DOCTYPE html>
<html>
<head>
  <title>ProduitApp - @yield('title')</title>

</head>
<body>
 
  <h1>Bienvenu sur le site Laravel Gestion de Produits</h1>
  <nav>
    <a href="{{ url('/') }}">Accueil</a> | 
    <a href="{{ url('/produit/1') }}">Produit 1</a>
    <a href="{{url('/ajout-produit')}}">Ajouter un produit</a>
  </nav>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>
