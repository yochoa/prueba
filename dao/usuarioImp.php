<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioImp
 *
 * @author yuniel
 */
include_once 'Iusuario.php';
include_once '../models/clientes.php';
include_once '../models/cliente.php';
include_once '../models/conn.php';
class usuarioImp implements Iusuario {

    public function AgregarUsuario(cliente $usu) {
        $con = new conn();
        $con->conectar();
        clientes::create(array('nombre' => $usu->getNombre(), 'apellido' => $usu->getApellido(), 'cp' => $usu->getCp(), 'telf' => $usu->getTelf()));
        
    }

    public function EliminarUsuario($id) 
    {
        
    }

}
