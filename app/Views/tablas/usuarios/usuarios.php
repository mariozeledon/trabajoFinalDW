<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('estilos/estiloTablas.css')?>">
    <title>Usuarios</title>
</head>
<body>
<h1><center>USUARIOS</center></h1>
<a href="<?=base_url('formAgregarUsuario')?>">
    <span class="material-icons">person_add</span>
</a>
<a href="<?=base_url('formBuscarUsuario')?>">
    <span class="material-icons">search</span>
</a>
<a href="<?=base_url('administrador')?>">
    <span class="material-icons">home</span>
</a>

    <table>
        <thead>
        <tr class="encabezado">
                <th>DPI</th>
                <th>Usuario</th>
                <th>Tipo de Usuario</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
<?php
    $no_fila=0;
    foreach($misUsuarios as $dato):
        $no_fila = $no_fila + 1; 
        if($no_fila%2==0){
            echo "<tr class='fila_par'>";
        }else{
            echo "<tr class='fila_impar'>";
        }
    ?>
    <td><?php echo $dato['dpi']; ?></td>
    <td><?=$dato['usuario']; ?></td>
    
    <td><?=$dato['tipousuario_id']; ?></td>
    <td>
        <a href="<?=base_url('formActualizarUsuario/'.$dato['dpi'])?>">
        <span class="material-icons">edit</span>Actualizar 
        </a>

        <a href="<?=base_url('eliminarUsuario/'.$dato['dpi'])?>">
            <span class="material-icons">delete</span>Eliminar
        </a> 
    </td>
</tr>
    <?php
    endforeach;
    
?>

</tbody>
    </table>
</body>
</html>