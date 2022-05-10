<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Departamento;
class Departamentos extends Controller{

    public function cargarDepartamentos(){
        $depto = new Departamento();
        $dato['misDepartamentos'] = $depto-> orderBy('cod_depto','ASC')->findAll();
        return view('tablas/departamento/departamentos', $dato);
    }

    public function formularioAgregarDepto(){
        return view('tablas/departamento/formAgregarDepartamento');
    }
    public function agregarDepartamento(){
        $depto = new Departamento();
        $txtCod = $this->request->getVar('txtCod');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtCodR = $this->request->getVar('txtCodR');
        $dato=[
            'cod_depto'=>$txtCod,
            'nombre'=>$txtNombre,
            'cod_region'=>$txtCodR
        ];
        $depto->insert($dato);
        $dato['misDepartamentos']=$depto->orderBy('cod_depto','ASC')->findAll();
        return view('tablas/departamento/departamentos', $dato);    
    }

    public function formularioActualizarDepto($cod=null){
        $depto = new Departamento();   
        $dato['misDepartamentos']=$depto->where('cod_depto',$cod)->first();
        return view('tablas/departamento/formActualizarDepartamento', $dato);    
    }

    public function actualizarDepartamento(){
        $depto = new Departamento();
        $txtCod = $this->request->getVar('txtCod');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtCodR = $this->request->getVar('txtCodR');
        $dato=[
            'cod_depto'=>$txtCod,
            'nombre'=>$txtNombre,
            'cod_region'=>$txtCodR
        ];
        $depto->update($txtCod,$dato);
        $dato['misDepartamentos']=$depto->orderBy('cod_depto','ASC')->findAll();
        return view('tablas/departamento/departamentos', $dato);    
    }

    public function eliminarDepartamento($depar=null){
        echo "<h3>EL CÓDIGO: ". $depar." FUE ELIMINADO CON ÉXITO</h3><br>";
        $depto = new Departamento();
        $depto->delete($depar);
        $dato['misDepartamentos']=$depto->orderBy('cod_depto','ASC')->findAll();
        return view('tablas/departamento/departamentos', $dato);   
    }
}