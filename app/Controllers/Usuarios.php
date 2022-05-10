<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Usuario;
class Usuarios extends Controller{

    public function iniciarSesion(){
            
        $usuario = $this->request->getVar('txtUsuario');
        $contra = $this->request->getVar('txtContra');

        $sql = "select * from usuarios where usuario ='".$usuario."' and password =('".$contra."')";
        $conexion = db_connect();

        $ejecutar = $conexion->query($sql);

        $cantidad = $ejecutar->getNumRows();
        
        if ($cantidad>0){
            $usuario = $ejecutar->getRow(0);    
            //echo $usuario->dpi;
            //echo $usuario->usuario;
            //echo $usuario->password;
            //echo $usuario->tipousuario_id;
        
        if($usuario->tipousuario_id==1){
            return view ('menus/administrador');
        }else if($usuario->tipousuario_id==2){
            return view ('menus/encargado');
        }else if($usuario->tipousuario_id==3){
            return view('menus/operador');
        }}
        else{
            echo "<h1><center>***Datos Incorrectos***</center></h1>";
            return view('validacion');
        }
    }
    public function cargarUsuarios(){
        $usuario = new Usuario();
        $dato['misUsuarios'] = $usuario-> orderBy('tipousuario_id','ASC')->findAll();
        return view('tablas/usuarios/usuarios',$dato);
    }

    public function eliminarUsuario($dpi=null){
        echo "<h3>EL DPI: ". $dpi." FUE ELIMINADO CON ÉXITO</h3><br>";
        $usuario = new Usuario();
        $usuario->delete($dpi);
        $dato['misUsuarios']=$usuario->orderBy('tipousuario_id','ASC')->findAll();
        return view('tablas/usuarios/usuarios', $dato);  
    }
    
    public function formularioAgregarUsuario(){
        return view('tablas/usuarios/formAgregarUsuario');
    }
    
    public function agregarUsuario(){
        
        $usuario = new Usuario();
        $txtDpi = $this->request->getVar('txtDpi');
        $txtUsuario = $this->request->getVar('txtUsuario');
        $txtContra = $this->request->getVar('txtContra');
        $txtTipoU = $this->request->getVar('txtTipoU');
        $dato=[
            'dpi'=>$txtDpi,
            'usuario'=>$txtUsuario,
            'password'=>$txtContra,
            'tipousuario_id'=>$txtTipoU
            
        ];
        $usuario->insert($dato);
        $dato['misUsuarios']=$usuario->orderBy('tipousuario_id','ASC')->findAll();
        return view('tablas/usuarios/usuarios',$dato);
    }

    public function formularioActualizarUsuario($dpi=null){
        $usuario = new Usuario();   
           $dato['misUsuarios']=$usuario->where('dpi',$dpi)->first();
        return view('tablas/usuarios/formActualizarUsuario', $dato);
    }

    public function actualizarUsuario(){
        $usuario = new Usuario();
        $txtDpi = $this->request->getVar('txtDpi');
        $txtUsuario = $this->request->getVar('txtUsuario');
        $txtContra = $this->request->getVar('txtContra');
        $txtTipoU = $this->request->getVar('txtTipoU');
        $dato=[
            'dpi'=>$txtDpi,
            'usuario'=>$txtUsuario,
            'password'=>$txtContra,
            'tipousuario_id'=>$txtTipoU
            
        ];  
        $usuario->update($txtDpi,$dato);
        $dato['misUsuarios'] = $usuario-> orderBy('tipousuario_id','ASC')->findAll();
        return view('tablas/usuarios/usuarios',$dato);
    }

    public function menuAdministrador(){
        return view ('menus/administrador');
    }

}