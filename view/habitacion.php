<?php
include_once '../models/habitacion.php';
$habitaciones = habitacion::find('all');
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
                <select name="operacion">
                    <?php
                    foreach ($habitaciones as $value) {
                        echo "<option value='" . $value->numero . "'></option>";
                    }
                    ?> 
                </select>
            </form>
        </div>
    </body>

    <html/>