<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Nivel;
class Niveles extends Controller{

    public function cargarNiveles(){
        $nivel = new Nivel();
        $dato['misNiveles'] = $nivel-> orderBy('cod_nivel_acad','ASC')->findAll();
        return view('tablas/nivel/niveles', $dato);
    }

    public function formularioAgregarNivel(){
        return view('tablas/nivel/formAgregarNiveles');
    }

    public function agregarNivel(){
        $nivel = new Nivel();
        $txtCod = $this->request->getVar('txtCod');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDesc = $this->request->getVar('txtDesc');
        $dato=[
            'cod_nivel_acad'=>$txtCod,
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDesc
        ];
        $nivel->insert($dato);
        $dato['misNiveles']=$nivel->orderBy('cod_nivel_acad','ASC')->findAll();
        return view('tablas/nivel/niveles', $dato);    
    }

    public function formularioActualizarNivel($tipoid=null){
        $nivel = new Nivel();   
        $dato['misNiveles']=$nivel->where('cod_nivel_acad',$tipoid)->first();
        return view('tablas/nivel/formActualizarNivel', $dato);       
    }

    public function actualizarNivel(){
        $nivel = new Nivel();
        $txtCod = $this->request->getVar('txtCod');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDesc = $this->request->getVar('txtDesc');
        $dato=[
            'cod_nivel_acad'=>$txtCod,
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDesc
        ];
        $nivel->update($txtCod,$dato);
        $dato['misNiveles']=$nivel->orderBy('cod_nivel_acad','ASC')->findAll();
        return view('tablas/nivel/niveles', $dato);    
    }

    public function eliminarNivel($tipoid=null){
        echo "<h3>EL CÓDIGO: ". $tipoid." FUE ELIMINADO CON ÉXITO</h3><br>";
        $nivel = new Nivel();
        $nivel->delete($tipoid);
        $dato['misNiveles']=$nivel->orderBy('cod_nivel_acad','ASC')->findAll();
        return view('tablas/nivel/niveles', $dato);   
    }
}
