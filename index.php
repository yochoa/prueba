<?php

$map = array(
    'buscar' => array('controller' => 'usuariocontroller', 'action' => 'buscar'),
    'listar' => array('controller' => 'Controller', 'action' => 'listar'),
    'insertar' => array('controller' => 'Controller', 'action' => 'insertar'),
    'buscar' => array('controller' => 'Controller', 'action' => 'buscarPorNombre'),
    'ver' => array('controller' => 'Controller', 'action' => 'ver')
);
$accion = "";
if (!empty($_GET['url'])) {
    $accion = $_GET['url'];
}

$controlador = $map[$accion];
print_r($controlador);

if(method_exists('controller/usuariocontroller.php', $accion))
{
   call_user_func(array(new $controlador['controller'], $controlador['action']));  
}




 
