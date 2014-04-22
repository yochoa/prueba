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

    public function EliminarUsuario($id) {
         $con = new conn();
        $con->conectar();
        $mensaje = "";
        
        $client = clientes::find($id);
        if ($client != NULL) {
            $client->delete();
        } else {
            $mensaje = "Se elimino";
        }
        if (empty($mensaje)) {
            return true;
        } else {
            return false;
        }
    }

    public function BuscarUsuario($nomb) {
        $con = new conn();
        $con->conectar();
                $cliente = clientes::all('all', array('conditions' => array('nombre = ?',$nomb )));
         
        if (count($cliente) > 0) {
            
            return $cliente[0];
        } else {
            return null;
        }
    }

}
