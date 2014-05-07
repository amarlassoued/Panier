<?php
include 'Class/Produit.php';
include 'Class/Panier.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Panier</title>
    </head>
    <body>
        <?php
        $panier = new Panier();
        $voiture = new Produit(1, 'Renault 19', 'Voiture', '1000€', 0);
        $moto = new Produit(2, 'Yamasaki', 'Moto', '1000€', 0);
        
        $panier->ajouterProduit($voiture);
        $panier->ajouterProduit($moto);
        ?>
        <table width="100%" height="400" style="border: 1px solid #000;border-collapse: collapse;">
            <?php
                $produitsDuPanier = $panier->getProducts();
                foreach ($produitsDuPanier as $cle => $produit) {
                    echo '<tr style="border: 1px solid #000;border-collapse: collapse;">';
                    echo '<td style="text-align:center">'.$produit->getProduit_id().'</td>';
                    echo '<td style="text-align:center">'.$produit->getNom().'</td>';
                    echo '<td style="text-align:center">'.$produit->getDescription().'</td>';
                    echo '<td style="text-align:center">'.$produit->getPrix().'</td>';
                    echo '<td style="text-align:center">'.$produit->getRemise().'</td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </body>
</html>
