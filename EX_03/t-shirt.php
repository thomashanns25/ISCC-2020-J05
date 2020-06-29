<?php

$nom_produit= "T-shirt simple";
$couleur= "blanc";
$prix= 10.50;
$disponible= "true";
$quantite= 0;

echo"<h3> le nom du produit est : {$nom_produit} </h3>";
echo"<h3> il reste 10 {$nom_produit} en stock: {$quantite} </h3>";
echo"<h3> le {$nom_produit} est de couleur : {$couleur} </h3>";

$cout3=$prix*3;
$couttotal=$prix*$quantite;

echo"<h4> Acheter 3 produits coûterait {$cout3}</h4>";
echo"<h4> Acheter la totalité des produits disponibles coûterait {$couttotal}</h4>";
echo"<h4> Si 3 produits sont vendus </h4>";

if ($disponible == "true") 
    {
        echo"<p> Le produit {$nom_produit} est disponible en magasin </p>";
    }
else
    {
        echo"<p> Le produit {$nom_produit} n'est malheureusement plus disponible </p>";
    }
    
if ($quantite >=5)
    {
        echo"<p> Il reste {$quantite} produits en magasins </p>";
    }

elseif ($quantite < 5 and $quantite > 1)
    {
        echo"<p> Il reste {$quantité} produits en magasins </p>";
    }

elseif ($quantite == 1)
    {
        echo"<p> Il ne reste plus qu'{$quantite} produit en magasins </p>";
    }
    
elseif ($quantite == 0)
    {
        echo"<p> Il ne reste plus de produits en magasins </p>";
    }

?>