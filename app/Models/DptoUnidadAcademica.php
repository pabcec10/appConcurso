<?php 
namespace App\Models;

use CodeIgniter\Model;

class DptoUnidadAcademica extends Model{
    protected $table      = 'departamentos_tbl';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idDepartamento';
    protected $allowedFields=['facultad','departamento'];
}