<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Ciudadano;
class Ciudadanos extends Controller{

    public function menuOperador(){
        return view('menus/operador');
    }

    public function cargarCiudadanos(){
        $ciudadano = new Ciudadano();
        $dato['misCiudadanos'] = $ciudadano-> orderBy('dpi','ASC')->findAll();
        return view('tablas/ciudadano/ciudadanos', $dato);
    }

    public function formularioAgregarCiudadano(){
        return view('tablas/ciudadano/formAgregarciudadanos');
    }

    public function agregarCiudadano(){
        $ciudadano = new Ciudadano();
        $txtDpi = $this->request->getVar('txtDpi');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDirec = $this->request->getVar('txtDirec');
        $txtCasa = $this->request->getVar('txtCasa');
        $txtMovil = $this->request->getVar('txtMovil');
        $txtEmail = $this->request->getVar('txtEmail');
        $txtFecha = $this->request->getVar('txtFecha');
        $txtCodN = $this->request->getVar('txtCodN');
        $txtLugar = $this->request->getVar('txtLugar');
        $txtContra = $this->request->getVar('txtContra');
        $dato=[
            'dpi'=>$txtDpi,
            'apellido'=>$txtApellido,
            'nombre'=>$txtNombre,
            'direccion'=>$txtDirec,
            'tel_casa'=>$txtCasa,
            'tel_movil'=>$txtMovil,
            'email'=>$txtEmail,
            'fechanac'=>$txtFecha,
            'cod_nivel_acad'=>$txtCodN,
            'lugar_nacimiento'=>$txtLugar,
            'contra'=>$txtContra
        ];
        $ciudadano->insert($dato);
        $dato['misCiudadanos']=$ciudadano->orderBy('dpi','ASC')->findAll();
        return view('tablas/ciudadano/ciudadanos', $dato);    
    }

    public function formularioActualizarCiudadano($dpi=null){
        $ciudadano = new Ciudadano();   
        $dato['misCiudadanos']=$ciudadano->where('dpi',$dpi)->first();
        return view('tablas/ciudadano/formActualizarCiudadano', $dato); 
    }

    public function actualizarCiudadano(){
        $ciudadano = new Ciudadano();
        $txtDpi = $this->request->getVar('txtDpi');
        $txtApellido = $this->request->getVar('txtApellido');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDirec = $this->request->getVar('txtDirec');
        $txtCasa = $this->request->getVar('txtCasa');
        $txtMovil = $this->request->getVar('txtMovil');
        $txtEmail = $this->request->getVar('txtEmail');
        $txtFecha = $this->request->getVar('txtFecha');
        $txtCodN = $this->request->getVar('txtCodN');
        $txtLugar = $this->request->getVar('txtLugar');
        $txtContra = $this->request->getVar('txtContra');
        $dato=[
            'dpi'=>$txtDpi,
            'apellido'=>$txtApellido,
            'nombre'=>$txtNombre,
            'direccion'=>$txtDirec,
            'tel_casa'=>$txtCasa,
            'tel_movil'=>$txtMovil,
            'email'=>$txtEmail,
            'fechanac'=>$txtFecha,
            'cod_nivel_acad'=>$txtCodN,
            'lugar_nacimiento'=>$txtLugar,
            'contra'=>$txtContra
        ];
        $ciudadano->update($txtDpi,$dato);
        $dato['misCiudadanos']=$ciudadano->orderBy('dpi','ASC')->findAll();
        return view('tablas/ciudadano/ciudadanos', $dato);    
    }

    public function eliminarCiudadano($dpi=null){
        echo "<h3>EL CÓDIGO: ". $dpi." FUE ELIMINADO CON ÉXITO</h3><br>";
        $ciudadano = new Ciudadano();
        $ciudadano->delete($dpi);
        $dato['misCiudadanos']=$ciudadano->orderBy('dpi','ASC')->findAll();
        return view('tablas/ciudadano/ciudadanos', $dato);      
    }
}