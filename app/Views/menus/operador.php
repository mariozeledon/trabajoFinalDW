<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('estilos/estilo_administrador.css')?>">
    <title>Operador</title>
</head>
<body>
    <br>
    <h1><center>MENU OPERADOR</center></h1>
    <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="<?=base_url('tablaCiudadanos')?>">Ciudadanos</a>
    <a href="<?=base_url('menu')?>">Salir</a>
  </div>
</div>

<h2>Bienvenido</h2>
<p>Podrá realizar los procesos CRUD a la tabla de ciudadanos.</p>
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