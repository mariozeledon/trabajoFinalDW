<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('estilos/estiloTablas.css')?>">
    <title>Regiones</title>
</head>
<body>
<h1><center>CIUDADANOS</center></h1>
<a href="<?=base_url('formAgregarCiudadano')?>">
    <span class="material-icons">person_add</span>
</a>
<a href="<?=base_url('#')?>">
    <span class="material-icons">search</span>
</a>
<a href="<?=base_url('operador')?>">
    <span class="material-icons">home</span>
</a>

    <table>
        <thead>
        <tr class="encabezado">
                <th>DPI</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Tel Casa</th>
                <th>Tel Movil</th>
                <th>Email</th>
                <th>Fecha de Nac.</th>
                <th>Nivel Acad</th>
                <th>Lugar de Nac.</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
<?php
    $no_fila=0;
    foreach($misCiudadanos as $dato):
        $no_fila = $no_fila + 1; 
        if($no_fila%2==0){
            echo "<tr class='fila_par'>";
        }else{
            echo "<tr class='fila_impar'>";
        }
    ?>
    <td><?=$dato['dpi']; ?></td>
    <td><?=$dato['apellido']; ?></td>
    <td><?=$dato['nombre']; ?></td>
    <td><?=$dato['direccion']; ?></td>
    <td><?=$dato['tel_casa']; ?></td>
    <td><?=$dato['tel_movil']; ?></td>
    <td><?=$dato['email']; ?></td>
    <td><?=$dato['fechanac']; ?></td>
    <td><?=$dato['cod_nivel_acad']; ?></td>
    <td><?=$dato['lugar_nacimiento']; ?></td>
    <td>
        <a href="<?=base_url('formActualizarCiudadano/'.$dato['dpi'])?>">
        <span class="material-icons">edit</span>Actualizar 
        </a>

        <a href="<?=base_url('eliminarCiudadano/'.$dato['dpi'])?>">
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