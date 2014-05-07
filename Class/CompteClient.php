<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompteClient
 *
 * @author Administrateur
 */
class CompteClient {
    private $client_id;
    private $nom;
    private $prenom;
    private $adresse;
    private $codepostal;
    private $ville;
    private $pays;
    
    function __construct($client_id, $nom, $prenom, $adresse, $codepostal, $ville, $pays) {
        $this->client_id = $client_id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->codepostal = $codepostal;
        $this->ville = $ville;
        $this->pays = $pays;
    }

    
    public function getClient_id() {
        return $this->client_id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getCodepostal() {
        return $this->codepostal;
    }

    public function getVille() {
        return $this->ville;
    }

    public function getPays() {
        return $this->pays;
    }

    public function setClient_id($client_id) {
        $this->client_id = $client_id;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    public function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;
    }

    public function setVille($ville) {
        $this->ville = $ville;
    }

    public function setPays($pays) {
        $this->pays = $pays;
    }


}
