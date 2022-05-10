<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/estilo_administrador.css')?>">
    <title>Document</title>
</head>
<body>
    <br>
    <h1><center>MENU ENCARGADO</center></h1>
    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="<?=base_url('tablaRegiones')?>">Regiones</a>
    <a href="<?=base_url('tablaDepartamentos')?>">Departamentos</a>
    <a href="<?=base_url('tablaMunicipios')?>">Municipios</a>
    <a href="<?=base_url('tablaNiveles')?>">Niveles Academicos</a>
    <a href="<?=base_url('menu')?>">Salir</a>
  </div>
</div>

<h2>Bienvenido</h2>
<p>Podrá realizar los procesos CRUD a regiones, departamentos, municipios y niveles académicos.</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Mostrar Tablas</span>

<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
</body>
</html>