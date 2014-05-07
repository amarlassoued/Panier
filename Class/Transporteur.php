<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transporteur
 *
 * @author Administrateur
 */
class Transporteur {
    private $transporteur_id;
    private $type;
    private $nom;
    
    function __construct($transporteur_id, $type, $nom) {
        $this->transporteur_id = $transporteur_id;
        $this->type = $type;
        $this->nom = $nom;
    }

    public function getTransporteur_id() {
        return $this->transporteur_id;
    }

    public function getType() {
        return $this->type;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setTransporteur_id($transporteur_id) {
        $this->transporteur_id = $transporteur_id;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }


}
