<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Produit
 *
 * @author Administrateur
 */
class Produit {
    private $produit_id;
    private $nom;
    private $description;
    private $prix;
    private $remise;
    
    function __construct($produit_id, $nom, $description, $prix, $remise) {
        $this->produit_id = $produit_id;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->remise = $remise;
    }

    public function getProduit_id() {
        return $this->produit_id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrix() {
        return $this->prix;
    }

    public function getRemise() {
        return $this->remise;
    }

    public function setProduit_id($produit_id) {
        $this->produit_id = $produit_id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }

    public function setRemise($remise) {
        $this->remise = $remise;
    }


}
