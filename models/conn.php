<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conn
 *
 * @author yuniel
 */
class conn {

    //put your code here
    function conectar() {
        ActiveRecord\Config::initialize(function($cfg) {
            $cfg->set_model_directory('../models');
            $cfg->set_connections(array(
                'development' => 'mysql://root:root@localhost/prueba'));
        });
    }

}
