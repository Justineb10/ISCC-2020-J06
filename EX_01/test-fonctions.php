<html>
    <body>
 <?php
$nom_produit="T-shirt femme";
$couleur="rouge";
$prix="15,50";
$disponible="true";
$quantite="10";
include "affichage.php"
afficher_titre ($nom_produit);
afficher_description ($couleur, $prix);
afficher_produit ($nom_produit, $couleur, $prix, $disponible);
update_dispo ($quantite);
restockage ($quantite, $nbajout);
achat ($quantite, $nbachat);

echo "Le nom du produit est $nom_produit";
echo "la couleur du produit est $couleur";
?>
</html>
