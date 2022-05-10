<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/formActualizar.css')?>">
    <title>Update Municipios</title>
</head>
<body>
   <center>
    <form action="<?=base_url('actualizarMunicipios')?>" method="get">
    <fieldset id="form">
    <legend><h1>Actualizar Municipios</h1></legend>
        <label for="txtCod">Código:</label>
        <input type="text" name="txtCod" readonly value="<?=$misMunicipios['cod_muni']?>">
        <br>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" value="<?=$misMunicipios['nombre']?>">
        <br>
        <label for="txtCodD">Codigo Departamento:</label>
        <input type="text" name="txtCodD" value="<?=$misMunicipios['cod_depto']?>">
        <br><br>
        <input type="submit" name="btnEnviar" value="Guardar datos">
    </form>
    </center>
</body>
</html>