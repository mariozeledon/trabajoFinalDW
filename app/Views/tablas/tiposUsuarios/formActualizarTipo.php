<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formActualizar.css')?>">
    <title>Update Tipo</title>
</head>
<body>
<center>
    <form action="<?=base_url('actualizarTipo')?>" method="get">
    <fieldset id="form">
    <legend><h1>Actualizar Tipo</h1></legend>
        <label for="txtId">Identificador:</label>
        <input type="text" name="txtId" readonly value="<?=$misTipos['tipousuario_id']?>">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$misTipos['nombre']?>">
        <br>
        <label for="txtObser">Observaciones:</label>
        <input type="text" name="txtObser" value="<?=$misTipos['observaciones']?>">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
    </center>
</body>
</html>