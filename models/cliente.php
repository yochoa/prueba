<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuario
 *
 * @author yuniel
 */

class cliente  {
    
    private $nombre;
    private $apellido;
    private $cp;
    private $telf;
    
    function __construct($nombre = null, $apellido = null, $cp = null, $telf= null) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->cp = $cp;
        $this->telf = $telf;
    }
    
   

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getCp() {
        return $this->cp;
    }

    public function getTelf() {
        return $this->telf;
    }

   

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function setCp($cp) {
        $this->cp = $cp;
    }

    public function setTelf($telf) {
        $this->telf = $telf;
    }



}
