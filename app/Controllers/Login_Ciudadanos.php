<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Login_Ciudadano;
class Login_Ciudadanos extends Controller{

    public function inicio_sesion_ciudadano(){
            
        $usuario = $this->request->getVar('txtUsuario');
        $contra = $this->request->getVar('txtContra');

        $sql = "select * from ciudadanos where dpi ='".$usuario."' and contra =('".$contra."')";
        $conexion = db_connect();

        $ejecutar = $conexion->query($sql);

        $cantidad = $ejecutar->getNumRows();
        
        if ($cantidad>0){
            $usuario = $ejecutar->getRow(0); 
            echo "<br><br> DPI: ".$usuario->dpi;
            echo "<br>Apellido: ".$usuario->apellido;
            echo "<br>Nombre: ".$usuario->nombre;
            echo "<br>Direccion: ".$usuario->direccion;
            echo "<br>Tel Casa: ".$usuario->tel_casa;
            echo "<br>Tel Celular: ".$usuario->tel_movil;
            echo "<br>Correo ".$usuario->email;
            echo "<br>Fecha Nac.: ".$usuario->fechanac;
            echo "<br>Nivel Aca.: ".$usuario->cod_nivel_acad;
            echo "<br>Lugar de Nac: ".$usuario->lugar_nacimiento;
        }
        else{
            echo "<h1><center>***Datos Incorrectos***</center></h1>";
            return view('login_ciudadano');
        }
    }
}
