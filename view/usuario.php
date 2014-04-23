<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once '../dao/usuarioImp.php';
if (isset($_REQUEST['iden'])) {
    $id = print_r($_REQUEST['iden']);
    $dao = new usuarioImp();
    $cl = $dao->UsuarioId($id);
    
}
?>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form id="usuario" method="post" action="../controller/usuariocontroller.php?type=
              <?php
              if (isset($id)) {
                  echo 9;
              } else {
                  echo 0;
              }
              ?>&id=<?php
              if (isset($id)) {
                  echo $id;
              } 
              ?>">
            Nombre:
            <input type="text" name="usuario" value="<?php
            if(isset($id))
            {
               echo trim($cl->nombre);
            }else
            {
              echo  "";
            }
                    ?>
                   "/>
            <br />
            Apellido
            <input type="text" name="apellido" 
                   value="<?php
            if(isset($id))
            {
               echo  $cl->apellido;
            }else
            {
              echo  "";
            }
                    ?>
                   "/>
            <br />
            Cp
            <input type="text" name="cp"
                   value="<?php
            if(isset($id))
            {
               echo  $cl->cp;
            }else
            {
              echo  "";
            }
                    ?>
                   "/>
            <br />
            Tel:
            <input type="text" name="telf" 
                   value="<?php
            if(isset($id))
            {
               echo  $cl->telf;
            }else
            {
              echo  "";
            }
                    ?>
                   "/>
            <br />
            <input type="submit" value="Agregar" />



        </form>
    </body>
</html>
