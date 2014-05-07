<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panier
 *
 * @author Administrateur
 */
class Panier {
    private $products;
    
    public function ajouterProduit(Produit $produit) {
        $this->products[] = $produit;
    }
    public function getProducts() {
        return $this->products;
    }
}
