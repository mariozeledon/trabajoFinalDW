<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formAgregar.css')?>">
    <title>Insert Ciudadano</title>
</head>
<body>
<center>
    <form action="<?=base_url('agregarCiudadano')?>" method="get" >
    <fieldset id="form">
    <legend><h1>Nuevo Ciudadano</h1></legend>
        <label for="txtDpi" >DPI:</label>
        <input type="text" name="txtDpi" placeholder="Ingrese el DPI">
        <br>
        <label for="txtApellido">Apellidos:</label>
        <input type="text" name="txtApellido" placeholder="Ingrese el apellido">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese el Nombre">
        <br>
        <label for="txtDirec">Dirección:</label>
        <input type="text" name="txtDirec" placeholder="Ingrese la direccion">
        <br>
        <label for="txtCasa">Tel Casa:</label>
        <input type="text" name="txtCasa" placeholder="Ingrese numero de casa">
        <br>
        <label for="txtMovil">Tel Móvil:</label>
        <input type="text" name="txtMovil" placeholder="Ingrese numero de celular">
        <br>
        <label for="txtEmail">Correo:</label>
        <input type="text" name="txtEmail" placeholder="Ingrese el correo">
        <br>
        <label for="txtFecha">Fecha de Nacimiento:</label>
        <input type="text" name="txtFecha" placeholder="Ingrese la fecha de nacimiento">
        <br>
        <label for="txtCodN">Nivel Académico:</label>
        <input type="text" name="txtCodN" placeholder="Ingrese el código del nivel">
        <br>
        <label for="txtLugar">Lugar de nacimiento:</label>
        <input type="text" name="txtLugar" placeholder="Ingrese el código del lugar">
        <br>
        <label for="txtContra">Contraseña:</label>
        <input type="text" name="txtContra" placeholder="Ingrese la contraseña">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
</center>
</body>
</html>