<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formAgregar.css')?>">
    <title>Insert Usuario</title>
</head>
<body>
<center>
    <form action="<?=base_url('agregarUsuario')?>" method="get" >
    <fieldset id="form">
    <legend><h1>Nuevo Usuario</h1></legend>
        <label for="txtDpi" >DPI:</label>
        <input type="text" name="txtDpi" placeholder="Ciudadano existente">
        <br>
        <label for="txtUsuario">Usuario:</label>
        <input type="text" name="txtUsuario" placeholder="El usuario es único">
        <br>
        <label for="txtContra">Contraseña:</label>
        <input type="password" name="txtContra" placeholder="Ingrese la contraseña">
        <br>
        <label for="txtTipoU">Tipo de Usuario:</label>
        <input type="text" name="txtTipoU" placeholder="1 Admin, 2 Encargado, 3 Operador">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">

    </form>
</center>
</body>
</html>