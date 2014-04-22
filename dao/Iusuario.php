<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Iusuario
 *
 * @author yuniel
 */
interface Iusuario {
public function AgregarUsuario(cliente $usu);
public function EliminarUsuario($id);
public function  BuscarUsuario($nombre);
}
