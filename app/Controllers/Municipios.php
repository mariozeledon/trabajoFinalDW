<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Municipio;
class Municipios extends Controller{

    public function cargarMunicipios(){
        $muni = new Municipio();
        $dato['misMunicipios'] = $muni-> orderBy('cod_muni','ASC')->findAll();
        return view('tablas/municipio/municipios', $dato);
    }

    public function formularioAgregarMunicipio(){
        return view('tablas/municipio/formAgregarMuni');
    }

    public function agregarMunicipio(){
        $muni = new Municipio();
        $txtCod = $this->request->getVar('txtCod');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtCodD = $this->request->getVar('txtCodD');
        $dato=[
            'cod_muni'=>$txtCod,
            'nombre'=>$txtNombre,
            'cod_depto'=>$txtCodD
        ];
        $muni->insert($dato);
        $dato['misMunicipios']=$muni->orderBy('cod_muni','ASC')->findAll();
        return view('tablas/municipio/municipios', $dato);    
    }

    public function formularioActualizarMuni($codm=null){
        $muni = new Municipio();   
        $dato['misMunicipios']=$muni->where('cod_muni',$codm)->first();
        return view('tablas/municipio/formActualizarMunicipio', $dato);   
    }

    public function actualizarMunicipios(){
        $muni = new Municipio();
        $txtCod = $this->request->getVar('txtCod');
        $txtNombre = $this->request->getVar('txtNombre');
        $txtCodD = $this->request->getVar('txtCodD');
        $dato=[
            'cod_muni'=>$txtCod,
            'nombre'=>$txtNombre,
            'cod_depto'=>$txtCodD
        ];
        $muni->update($txtCod,$dato);
        $dato['misMunicipios']=$muni->orderBy('cod_muni','ASC')->findAll();
        return view('tablas/municipio/municipios', $dato);    
    }
    public function eliminarMuni($codm=null){
        echo "<h3>EL CÓDIGO: ". $codm." FUE ELIMINADO CON ÉXITO</h3><br>";
        $muni = new Municipio();
        $muni->delete($codm);
        $dato['misMunicipios']=$muni->orderBy('cod_muni','ASC')->findAll();
        return view('tablas/municipio/municipios', $dato);   
    }
}