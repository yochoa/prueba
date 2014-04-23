<?php
include_once '../models/habitacion.php';
include '../models/conn.php';
$conn = new conn();
$conn->conectar();
$habitaciones = habitacion::first();
print_r($habitaciones->to_json());
//print_r(count($habitaciones));
?>

<html>
    <head>
        <title>Habitacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form id="habitacion" method="post" action="">
                Seleccione la habitacion:
                <select name="operacion" id="operacion" >
                    <?php
                    foreach ($habitaciones as $value) {
                        echo "<option value='" . $value->numero . "'> " . $value->numero . " </option>";
                    }
                    ?> 
                </select>
                <br/>
                Costo:
                <input type="text" name="costo" id="costo" disabled="true">
            </form>
        </div>
    </body>

    <html/>