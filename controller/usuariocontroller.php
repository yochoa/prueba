<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuariocontroller
 *
 * @author yuniel
 */
include_once '../models/cliente.php';
include_once '../dao/Iusuario.php';
include_once '../dao/usuarioImp.php';
class usuariocontroller {
    
public  function Agregar() {
//        $c = new conn();
//        $c->conectar();
        $nombre = $_REQUEST["usuario"];
        $apellido = $_REQUEST["apellido"];
        $cp = $_REQUEST["cp"];
        $telf = $_REQUEST["telf"];
        if (isset($nombre) && isset($apellido) && isset($cp) && isset($telf)) {
            $usuario = new cliente($nombre, $apellido, $cp, $telf);
            $usuarioImp = new usuarioImp();
            $usuarioImp->AgregarUsuario($usuario);
        }
    }
    
}
$u = new usuariocontroller();
$u->Agregar();

