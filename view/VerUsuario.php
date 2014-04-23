


<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <table border="1">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cp</th>
                <th>Telefono</th>
                <th>Accion</th>
            </tr>
            <?php
            include_once '../dao/usuarioImp.php';
            $usuarioImp = new usuarioImp();
            $usu = $usuarioImp->AllUsuario();
            foreach ($usu as $row) {
      
                echo '<tr>';
                echo '<td>' . $row->nombre . '</td>';
                echo '<td>' . $row->apellido . '</td>';
                echo '<td>' . $row->cp . '</td>';
                echo '<td>' . $row->telf . '</td>';
                echo '<td>' . "<a href='usuario.php?iden=$row->idclinte'>  Editar </a>" .'</td>';
                echo '</tr>';
            }
            ?>
        </table>

    </body>
</html>

