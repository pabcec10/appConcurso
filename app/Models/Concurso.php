<?php 
namespace App\Models;

use CodeIgniter\Model;

class Concurso extends Model{
    protected $table      = 'concursos_tbl';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'idConcurso';
    protected $allowedFields=['cargo','resolucion','destino','caracter','descripcionCargo','institutos_deptos',
    'denominado','codigo','otrasFunciones','expediente','unidadAcademica','categoria','fechaAlta','fechaInicio',
    'fechaCierre','fechaPublicacion','estado','suspendido','fechaSuspension','notificadoMesaEntrada',
    'notificadoSeccionAlumnos','notificadoDptoConcurso','actaCierre','problemaActa','detalleProblemaActa',
    'fechaNotificacionProblemaActa','refrendeadoSecretaria','fechaRefrendadoSecretaria','actaCierrePublicada',
    'fechaActaCierrePublicada','estadoAula','archivoDictamen','linkAula'];
}