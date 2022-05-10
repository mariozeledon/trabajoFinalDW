<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formActualizar.css')?>">
    <title>Update Nivel</title>
</head>
<body>
<center>
    <form action="<?=base_url('actualizarNivel')?>" method="get">
    <fieldset id="form">
    <legend><h1>Actualizar Nivel Academico</h1></legend>
        <label for="txtCod">Codigo:</label>
        <input type="text" name="txtCod" readonly value="<?=$misNiveles['cod_nivel_acad']?>">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$misNiveles['nombre']?>">
        <br>
        <label for="txtDesc">Descripción:</label>
        <input type="text" name="txtDesc" value="<?=$misNiveles['descripcion']?>">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
    </center>
</body>
</html>