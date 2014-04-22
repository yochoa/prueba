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

    public function Agregar() {
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

    public function Buscar() {
        $nombre = $_REQUEST["usuario"];
        if (isset($nombre)) {
            $usuario = new cliente();
            $usuarioImp = new usuarioImp();

            $usu = $usuarioImp->BuscarUsuario($nombre);
            if (!is_null($usu)) {
                return $usu;
            } else {
                return "Hola";
            }
        }
    }

}

if (isset($_GET['type']) && $_GET['type'] == 0) {
    $u = new usuariocontroller();
    $u->Agregar();
} elseif (isset($_GET['type']) && $_GET['type'] == 1) {
    $u = new usuariocontroller();
    $result = $u->Buscar();
    if ($result != 'Hola') {
        echo $result->nombre;
        echo '<br/>';
        echo $result->apellido;
    } else {
        echo "no se encontro";
    }
} else {
    echo "eliminar";
}


