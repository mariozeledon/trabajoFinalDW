<?php 
namespace App\Models;

use CodeIgniter\Model;

class Municipio extends Model{
    protected $table      = 'municipios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'cod_muni';
    protected $allowedFields = ['cod_muni','nombre','cod_depto'];
}