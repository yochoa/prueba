<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 if(isset($params['resultado']))
if(count($params['resultado'])>0)
{
    print_r($params['resultado']);
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form id="usuario" method="post" action="index.php?url=buscar">
            Nombre:
            <input type="text" name="usuario" />
            <br />

            <input type="submit" value="Buscar" />
        </form>
       
    </body>
</html>
