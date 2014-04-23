<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reservacioncontroller
 *
 * @author yuniel
 */
include_once '../models/cliente.php';
include_once '../dao/Iusuario.php';
include_once '../dao/usuarioImp.php';
include_once '../models/habitacion.php';
include_once '../models/reservacion.php';

class reservacioncontroller {

    public function Agregar() {
//        $c = new conn();
//        $c->conectar();
        $nombre = $_REQUEST["usuario"];
        $apellido = $_REQUEST["apellido"];
        $cp = $_REQUEST["cp"];
        $telf = $_REQUEST["telf"];
        $habitacion = $_REQUEST['operacion'];
        $fsalida = $_REQUEST['fsalida'];
        $fentrada = $_REQUEST['fentrada'];
        if (isset($nombre) && isset($apellido) && isset($cp) && isset($telf)) {
            $usuario = new cliente($nombre, $apellido, $cp, $telf);
            $usuarioImp = new usuarioImp();
            $usu = $usuarioImp->AgregarUsuario($usuario);
            $habit = habitacion::all('all', array('conditions' => array('numero = ?', $habitacion)));
            $rese = reservacion::create(array('id_habitacion' => $habit[0]->idhabitacion, 'id_cliente' => $usu->idclinte, 'costo' => $habit[0]->costo, 'fecha_e' => $fentrada, 'fecha_s' => $fsalida));
        }
    }

}

$reservacion = new reservacioncontroller();
$reservacion->Agregar();
