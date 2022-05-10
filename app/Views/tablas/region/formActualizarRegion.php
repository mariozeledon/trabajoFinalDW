<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formActualizar.css')?>">
    <title>Update Region</title>
</head>
<body>
<center>
    <form action="<?=base_url('actualizarRegion')?>" method="get">
    <fieldset id="form">
    <legend><h1>Actualizar Region</h1></legend>
        <label for="txtCod">Identificador:</label>
        <input type="text" name="txtCod" readonly value="<?=$misRegiones['cod_region']?>">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$misRegiones['nombre']?>">
        <br>
        <label for="txtDesc">Observaciones:</label>
        <input type="text" name="txtDesc" value="<?=$misRegiones['descripcion']?>">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
    </center>
</body>
</html>