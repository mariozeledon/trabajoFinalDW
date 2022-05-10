<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formActualizar.css')?>">
    <title>Update Departamento</title>
</head>
<body>
   <center>
    <form action="<?=base_url('actualizarDepartamento')?>" method="get">
    <fieldset id="form">
    <legend><h1>Actualizar Departamento</h1></legend>
        <label for="txtCod">Código:</label>
        <input type="text" name="txtCod" readonly value="<?=$misDepartamentos['cod_depto']?>">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$misDepartamentos['nombre']?>">
        <br>
        <label for="txtCodR">Codigo Región:</label>
        <input type="text" name="txtCodR" value="<?=$misDepartamentos['cod_region']?>">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
    </center>
</body>
</html>