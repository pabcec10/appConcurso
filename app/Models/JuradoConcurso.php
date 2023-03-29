<?php 
namespace App\Models;

use CodeIgniter\Model;

class JuradoConcurso extends Model{
    protected $table      = 'juradoconcurso_tbl';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idJuradoConcurso';
    protected $allowedFields=['idJurado','idConcurso','caracter',
    'fechaAsignacion','motivoBaja'];
}