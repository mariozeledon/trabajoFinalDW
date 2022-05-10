<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Region;
class Regiones extends Controller{

    public function menuEncargado(){
        return view('menus/encargado');
    }

    public function cargarRegiones(){
        $region = new Region();
        $dato['misRegiones'] = $region-> orderBy('cod_region','ASC')->findAll();
        return view('tablas/region/regiones', $dato);
    }
    
    public function formularioAgregarRegion(){
        return view('tablas/region/formAgregarRegion');
    }

    public function agregarRegion(){
        $region = new Region();
        $txtCod = $this->request->getVar('txtCod');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDesc = $this->request->getVar('txtDesc');
        $dato=[
            'cod_region'=>$txtCod,
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDesc
        ];
        $region->insert($dato);
        $dato['misRegiones']=$region->orderBy('cod_region','ASC')->findAll();
        return view('tablas/region/regiones', $dato);    
    }

    public function formularioActualizarRegion($cod=null){
        $region = new Region();   
        $dato['misRegiones']=$region->where('cod_region',$cod)->first();
        return view('tablas/region/formActualizarRegion', $dato);     
    }

    public function actualizarRegion(){
        $region = new Region();
        $txtCod = $this->request->getVar('txtCod');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtDesc = $this->request->getVar('txtDesc');
        $dato=[
            'cod_region'=>$txtCod,
            'nombre'=>$txtNombre,
            'descripcion'=>$txtDesc
        ];
        $region->update($txtCod,$dato);
        $dato['misRegiones']=$region->orderBy('cod_region','ASC')->findAll();
        return view('tablas/region/regiones', $dato);    
    }

    public function eliminarRegion($cod=null){
        echo "<h3>EL CÓDIGO: ". $cod." FUE ELIMINADO CON ÉXITO</h3><br>";
        $region = new Region();
        $region->delete($cod);
        $dato['misRegiones']=$region->orderBy('cod_region','ASC')->findAll();
        return view('tablas/region/regiones', $dato);   
    }
}