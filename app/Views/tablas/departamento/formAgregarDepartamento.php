<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formAgregar.css')?>">
    <title>Insert Departamento</title>
</head>
<body>
<center>
    <form action="<?=base_url('agregarDepartamento')?>" method="get" >
    <fieldset id="form">
    <legend><h1>Nuevo Departamento</h1></legend>
        <label for="txtCod" >Codigo:</label>
        <input type="text" name="txtCod" placeholder="Ingrese el código">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" placeholder="Ingrese el nombre">
        <br>
        <label for="txtCodR">Codigo Region:</label>
        <input type="text" name="txtCodR" placeholder="Ingrese el código de la Regíon">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
</center>
</body>
</html>