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
        if (strlen($nombre) > 0) {

            $usuario = new cliente();
            $usuarioImp = new usuarioImp();

            $usu = $usuarioImp->BuscarUsuario($nombre);

            if (!is_null($usu)) {
                return $usu;
            } else {
                return "Hola";
            }
        } else {
            print_r($nombre);
            return "empty";
        }
    }

}

if (isset($_GET['type']) && $_GET['type'] == 0) {
    $u = new usuariocontroller();
    $u->Agregar();
} else {
    $u = new usuariocontroller();
    $result = $u->Buscar();
    if ($result != 'Hola' && $result != "empty") {
        if (isset($_GET['type']) && $_GET['type'] == 1) {
            echo $result->nombre;
            echo '<br/>';
            echo $result->apellido;
        } elseif (isset($_GET['type']) && $_GET['type'] == 2) {
            $usuarioImp = new usuarioImp();
            $result = $usuarioImp->EliminarUsuario($result->idclinte);
            if ($result) {
                echo "Se elimino el cliente";
            } else {
                echo "No se elimino el cliente";
            }
        }
    } elseif ($result != 'empty') {
        echo "no se encontro";
    } else {

        header("location:../view/buscar.php");
        echo'<script type="text/javascript">
                alert("Debe llenar el campo");
                </script>';
    }
} 

