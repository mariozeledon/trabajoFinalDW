<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formActualizar.css')?>">
    <title>Update Usuario</title>
</head>
<body>
   <center>
    <form action="<?=base_url('actualizarUsuario')?>" method="get">
    <fieldset id="form">
    <legend><h1>Actualizar Usuario</h1></legend>
        <label for="txtDpi">DPI:</label>
        <input type="text" name="txtDpi" readonly value="<?=$misUsuarios['dpi']?>">
        <br>
        <label for="txtUsuario">Usuario:</label>
        <input type="text" name="txtUsuario" value="<?=$misUsuarios['usuario']?>">
        <br>
        <label for="txtContra">Password:</label>
        <input type="text" name="txtContra" value="<?=$misUsuarios['password']?>">
        <br>
        <label for="txtTipoU">Tipo de Usuario:</label>
        <input type="text" name="txtTipoU" value="<?=$misUsuarios['tipousuario_id']?>">        
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
    </center>
</body>
</html>