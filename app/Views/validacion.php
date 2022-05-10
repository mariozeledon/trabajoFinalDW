<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('estilos/validacion.css')?>">
    <title>Inicio de Sesión</title>
</head>
<body>
<br>
<h1><center> Inicio de Seción</center></h1>
<h2><center>ADMINISTRADOR, ENCARGADO Y OPERADOR</center></h2>

<form action="<?=base_url('iniciar_sesion')?>" method="post">
  <div class="imgcontainer">
    <img src="<?=base_url('imagenes/usac.png')?>" width="5" height="250" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label for="txtUsuario"><b>Usuario</b></label>
    <input type="text" placeholder="Ingrese el usuario" name="txtUsuario" required>

    <label for="txtContra"><b>Password</b></label>
    <input type="password" placeholder="Ingrese la contraseña" name="txtContra" required>
        
    <button type="submit" >Iniciar Sesion</button>
</form>   
  </div>
<center><a href="<?=base_url('login_ciudadano')?>"><button class="cancelbtn">CIUDADANO</button></a></center>
  <br><br><br>
  <p>Elaborado por: Mario Roberto Morales Zeledón<br>
Carné: 201805909</p>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>