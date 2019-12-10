<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Magasin</title>
</head>
<body>
    <ul>
        <li>Tagada</li>
        <li>Schtroumpfs</li>
        <li>Croco</li>
    </ul>
   <?php
    // $produits = [
    //             'Tagada' => ['prix' => 1, 'quantite' => 10],
    //             'Schtroumpfs' => ['prix' => 1.5, 'quantite' => 10],
    //             'Croco' => ['prix' => 2, 'quantite' => 10]
    //         ]
            $produit=array();
            $produit['nom']="Tagada";
            $produit['prix']=1;
            $produit['quantite']=50;
            echo " Article: " .$produit['nom'] ." Prix (€): " .$produit['prix'] ." Quantité: " .$produit['quantite'];
        ?>
</body>
</html>