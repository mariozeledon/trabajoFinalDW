<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formAgregar.css')?>">
    <title>Insert Tipo</title>
</head>
<body>
<center>
    <form action="<?=base_url('agregarTipoU')?>" method="get" >
    <fieldset id="form">
    <legend><h1>Nuevo tipo de usuario</h1></legend>
        <label for="txtId" >Identificador:</label>
        <input type="text" name="txtId" placeholder="Numero de ID">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Nombre del tipo">
        <br>
        <label for="txtObser">Observaciones:</label>
        <input type="text" name="txtObser" placeholder="Permisos">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
</center>
</body>
</html>