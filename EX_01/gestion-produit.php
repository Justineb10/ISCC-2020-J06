<html>
<head>
<title>Exo 1</title>
</head>
<body>
<?php
function update_dispo ($quantite)
{
if ($quantite >0);
    
     return TRUE;
    
             else
    
        return FALSE;
    
}

function restockage ($quantite, $nbajout)
{
        echo"<p>$nbajout produits ont été ajoutés au stock</p>";
        return $quantite + $nbajout;
}
function achat ($quantite, $nbachat)
{
echo"<p>$nbachat produits ont été achetés</p>";
        return $quantite - $nbajout;
}
?>
</body>
</html>