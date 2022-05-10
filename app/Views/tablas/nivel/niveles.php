<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('estilos/estiloTablas.css')?>">
    <title>Niveles</title>
</head>
<body>
<h1><center>NIVELES</center></h1>
<a href="<?=base_url('formAgregarNivel')?>">
    <span class="material-icons">person_add</span>
</a>
<a href="<?=base_url('#')?>">
    <span class="material-icons">search</span>
</a>
<a href="<?=base_url('encargado')?>">
    <span class="material-icons">home</span>
</a>

    <table>
        <thead>
        <tr class="encabezado">
                <th>Código</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
<?php
    $no_fila=0;
    foreach($misNiveles as $dato):
        $no_fila = $no_fila + 1; 
        if($no_fila%2==0){
            echo "<tr class='fila_par'>";
        }else{
            echo "<tr class='fila_impar'>";
        }
    ?>
    <td><?=$dato['cod_nivel_acad']; ?></td>
    <td><?=$dato['nombre']; ?></td>
    <td><?=$dato['descripcion']; ?></td>
    <td>
        <a href="<?=base_url('formActualizarNivel/'.$dato['cod_nivel_acad'])?>">
        <span class="material-icons">edit</span>Actualizar 
        </a>

        <a href="<?=base_url('eliminarNivel/'.$dato['cod_nivel_acad'])?>">
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