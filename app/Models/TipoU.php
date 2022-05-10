<?php 
namespace App\Models;

use CodeIgniter\Model;

class TipoU extends Model{
    protected $table      = 'tipos_usuarios';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'tipousuario_id';
    protected $allowedFields = ['tipousuario_id','nombre','observaciones'];
}