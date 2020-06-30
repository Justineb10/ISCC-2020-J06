<html>

<head>
<title>Exo 1</title>
</head>
<h1>
<?php
function afficher_titre ($nom_produit)
{
    echo "fiche produits : $nom_produit\n";
}
?>
</h1>
<p>
<?php
function afficher_description ($couleur, $prix)
{
    echo "couleur : $couleur, prix : $prix\n";
}
?>
</p>
<?php
function afficher_produit ($nom_produit, $couleur, $prix, $disponible)
{
if ($disponible = true)
{
echo "$nom_produit, $couleur, $prix\n";
}
if ($disponible = false)
{
    echo "Le produit $nom_produit n'est malheureusement plus disponible\n";
}
}
?>
</p>
</html>