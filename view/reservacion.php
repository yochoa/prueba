<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../models/habitacion.php';
include '../models/conn.php';
$conn = new conn();
$conn->conectar();
$habitaciones = habitacion::all();
?>
<html>
    <head>
        <title>Reservacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form id="usuario" method="post" action="./controller/usuariocontroller.php">
         Nombre:
         <input type="text" name="usuario" />
         <br />
         Apellido
         <input type="text" name="apellido" />
         <br />
         Cp
         <input type="text" name="cp" />
         <br />
         Tel:
         <input type="text" name="telf" />
         <br />
         Seleccione la habitacion:
                <select name="operacion" id="operacion" >
                    <?php
                    foreach ($habitaciones as $value) {
                        echo "<option value='" . $value->numero . "'> " . $value->numero . " </option>";
                    }
                    ?> 
                </select>
         <br/>
         <input type="submit" value="Reservar"  />
        </form>
        </div>
    </body>
</html>
