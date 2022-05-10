<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TipoU;
class Tipos extends Controller{

    public function cargarTipoU(){
        $tipo = new TipoU();
        $dato['misTipos'] = $tipo-> orderBy('tipousuario_id','ASC')->findAll();
        return view('tablas/tiposUsuarios/tiposU', $dato);
    }

    public function formularioAgregarTipo(){
        return view('tablas/tiposUsuarios/formAgregartiposU');
    }

    public function agregarTipo(){
        $tipo = new TipoU();
        $txtId = $this->request->getVar('txtId');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtObser = $this->request->getVar('txtObser');
        $dato=[
            'tipousuario_id'=>$txtId,
            'nombre'=>$txtNombre,
            'observaciones'=>$txtObser
        ];
        $tipo->insert($dato);
        $dato['misTipos']=$tipo->orderBy('tipousuario_id','ASC')->findAll();
        return view('tablas/tiposUsuarios/tiposU', $dato);    
    }

    public function formularioActualizarTipo($tipoid=null){
        $tipo = new TipoU();   
        $dato['misTipos']=$tipo->where('tipousuario_id',$tipoid)->first();
        return view('tablas/tiposUsuarios/formActualizarTipo', $dato);       
    }

    public function actualizarTipo(){
        $tipo = new TipoU();    
        $txtId = $this->request->getVar('txtId');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtObser = $this->request->getVar('txtObser');
        $dato=[
            'tipousuario_id'=>$txtId,
            'nombre'=>$txtNombre,
            'observaciones'=>$txtObser
        ];
        $tipo->update($txtId, $dato);
        $dato['misTipos']=$tipo->orderBy('tipousuario_id','ASC')->findAll();
        return view('tablas/tiposUsuarios/tiposU', $dato);    
    }

    public function eliminarTipo($tipoid=null){
        echo "<h3>EL CÓDIGO: ". $tipoid." FUE ELIMINADO CON ÉXITO</h3><br>";
        $tipo = new TipoU();
        $tipo->delete($tipoid);
        $dato['misTipos']=$tipo->orderBy('tipousuario_id','ASC')->findAll();
        return view('tablas/tiposUsuarios/tiposU', $dato);   
    }
}