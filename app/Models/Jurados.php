<?php 
namespace App\Models;

use CodeIgniter\Model;

class Jurados extends Model{
    protected $table      = 'jurados_tbl';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idJurado';
    protected $allowedFields=['nombre','documento','celular','email','fechaAlta'];
}