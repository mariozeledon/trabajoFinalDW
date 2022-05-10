<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formActualizar.css')?>">
    <title>Update Ciudadano</title>
</head>
<body>
   <center>
    <form action="<?=base_url('actualizarCiudadano')?>" method="get">
    <fieldset id="form">
    <legend><h1>Actualizar Ciudadano</h1></legend>
        <label for="txtDpi">DPI:</label>
        <input type="text" name="txtDpi" readonly value="<?=$misCiudadanos['dpi']?>">
        <br>
        <label for="txtApellido">Apellido:</label>
        <input type="text" name="txtApellido" value="<?=$misCiudadanos['apellido']?>">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$misCiudadanos['nombre']?>">
        <br>
        <label for="txtDirec">Direccion:</label>
        <input type="text" name="txtDirec" value="<?=$misCiudadanos['direccion']?>">
        <br>
        <label for="txtCasa">Tel Casa:</label>
        <input type="text" name="txtCasa" value="<?=$misCiudadanos['tel_casa']?>">
        <br>
        <label for="txtMovil">Tel Movil:</label>
        <input type="text" name="txtMovil" value="<?=$misCiudadanos['tel_movil']?>">
        <br>
        <label for="txtEmail">Correo:</label>
        <input type="text" name="txtEmail" value="<?=$misCiudadanos['email']?>">
        <br>
        <label for="txtFecha">Fecha de Nacimiento:</label>
        <input type="text" name="txtFecha" value="<?=$misCiudadanos['fechanac']?>">
        <br>
        <label for="txtCodN">Nivel Academico:</label>
        <input type="text" name="txtCodN" value="<?=$misCiudadanos['cod_nivel_acad']?>">
        <br>
        <label for="txtLugar">Lugar de Nacimiento:</label>
        <input type="text" name="txtLugar" value="<?=$misCiudadanos['lugar_nacimiento']?>">
        <br>
        <label for="txtContra">Contraseña:</label>
        <input type="text" name="txtContra" value="<?=$misCiudadanos['contra']?>">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
    </center>
</body>
</html>
