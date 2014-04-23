<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reservacion
 *
 * @author yuniel
 */
include_once '../lib/ActiveRecord/ActiveRecord.php';
class reservacion extends ActiveRecord\Model{
    static $table_name = 'reservacion';
}
