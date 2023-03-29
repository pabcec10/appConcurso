<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\concurso;
use App\Models\Jurados;
use App\Models\DptoUnidadAcademica;
class Concursos extends Controller{

    public function index()
    {
        $concursos=new concurso();
        $datos['concursos']=$concursos->orderBy('idConcurso','ASC')->findAll();
        //$datos['concursos']=
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('principal/listado_ConcursoAuxiliar',$datos);
    }

    public function alta_concursoauxiliar()
    {
        $modeloDpto=new DptoUnidadAcademica();

        $Unidad='Facultad de Ciencias Exactas, Fisicas y Naturales';
        
        $datos['Dptos']=$modeloDpto ->where('facultad',$Unidad)
                                    //->where('departamento','Departamento de Informática')
                                    ->orderBy('departamento','ASC')
                                    ->findAll();

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');
        

        return view('principal/alta_ConcursoAuxiliar',$datos);
    }

    public function alta_Jurado()
    {
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('principal/alta_Jurado',$datos);
    }

    public function altaConcursoAuxiliar_1()
    {

        //Hace referencia al modelo
        $concurso=new concurso();
        //Carga el arreglo con los datos a insertar
        $datos=[
            'cargo'=>$this->request->getVar('cargo'),
            'resolucion'=>$this->request->getVar('resolucion'),
            'destino'=>$this->request->getVar('destino'),
            'caracter'=>$this->request->getVar('caracter'),
            'descripcionCargo'=>$this->request->getVar('descripcionCargo'),
            'institutos_deptos'=>$this->request->getVar('institutos_deptos'),  //'Inst',
            'denominado'=>$this->request->getVar('denominado'),
            'fechaInicio'=>$this->request->getVar('fechaInicio'),
            'fechaCierre'=>$this->request->getVar('fechaCierre'),
            'codigo'=>$this->request->getVar('codigo'),
            'expediente'=>$this->request->getVar('expediente'),
            'otrasFunciones'=>$this->request->getVar('otrasFunciones'),
            'unidadAcademica'=>'EXACTAS',
            'categoria'=>'AUXILIAR'
        ];
        //Carga en la base de datos
        $concurso->insert($datos);
        //Muestra el listado con el registro insertado
        return $this->response->redirect(site_url('/listado_ConcursoAuxiliar'));
            
    }

    public function borrarConcurso($idCon=null)
    {
        //Hace referencia al modelo
        $concurso=new concurso();
        //Busca el registro por el Id 
        $datosConcurso=$concurso->where('idConcurso',$idCon)->first();
        //Borra el registro con el Id del Concurso
        $concurso->where('idConcurso',$idCon)->delete($idCon);
        //Muestra el listado con el registro eliminado
        return $this->response->redirect(site_url('/listado_ConcursoAuxiliar'));
        
    }

    public function editarConcurso($idCon=null)
    {
        $modeloDpto=new DptoUnidadAcademica();
        //Hace referencia al modelo
        $concurso=new concurso();
        $datos['concurso']=$concurso->where('idConcurso',$idCon)->first();

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        $Unidad='Facultad de Ciencias Exactas, Fisicas y Naturales';

        $datos['Dptos']=$modeloDpto ->where('facultad',$Unidad)
                                    //->where('departamento','Departamento de Informática')
                                    ->orderBy('departamento','ASC')
                                    ->findAll();

        return view('principal/editarConcurso',$datos);
    }
    public function actalizarConcursoAuxiliar()
    {
        $concurso=new concurso();

        $datos=[
            'cargo'=>$this->request->getVar('cargo'),
            'resolucion'=>$this->request->getVar('resolucion'),
            'destino'=>$this->request->getVar('destino'),
            'caracter'=>$this->request->getVar('caracter'),
            'descripcionCargo'=>$this->request->getVar('descripcionCargo'),
            'institutos_deptos'=>$this->request->getVar('institutos_deptos'),
            'denominado'=>$this->request->getVar('denominado'),
            'fechaInicio'=>$this->request->getVar('fechaInicio'),
            'fechaCierre'=>$this->request->getVar('fechaCierre'),
            'codigo'=>$this->request->getVar('codigo'),
            'expediente'=>$this->request->getVar('expediente'),
            'otrasFunciones'=>$this->request->getVar('otrasFunciones'),
            'unidadAcademica'=>'EXACTAS',
            'categoria'=>'AUXILIAR'
        ];
        $idCon=$this->request->getVar('idConcurso');

        $concurso->update($idCon,$datos);

        return $this->response->redirect(site_url('/listado_ConcursoAuxiliar'));
    }

    public function listado_Jurados()
    {
        $jurados=new Jurados();
        $datos['jurados']=$jurados->orderBy('idJurado','ASC')->findAll();
        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('principal/listado_Jurados',$datos);
    }

    public function altaJurado()
    {
        //Hace referencia al modelo
        $jurados=new Jurados();
        //Carga el arreglo con los datos a insertar
        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'documento'=>$this->request->getVar('documento'),
            'celular'=>$this->request->getVar('celular'),
            'email'=>$this->request->getVar('email')
        ];
        //Carga en la base de datos
        $jurados->insert($datos);
        //Muestra el listado con el registro insertado
        return $this->response->redirect(site_url('/listado_Jurados'));
            
    }
    public function borrarJurado($idJur=null)
    {
        //Hace referencia al modelo
        $jurado=new Jurados();
        //Busca el registro por el Id 
        $datosJurado=$jurado->where('idJurado',$idJur)->first();
        //Borra el registro con el Id del Concurso
        $jurado->where('idJurado',$idJur)->delete($idJur);
        //Muestra el listado con el registro eliminado
        return $this->response->redirect(site_url('/listado_Jurados'));
        
    }
    public function editarJurado($idJur=null)
    {
        //print_r($idJur);
        
         //Hace referencia al modelo
        $jurado=new Jurados();
        $datos['jurado']=$jurado->where('idJurado',$idJur)->first();

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('principal/editarJurado',$datos);
    }
    public function actualizarJurado()
    {
        $jurado=new Jurados();

        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'documento'=>$this->request->getVar('documento'),
            'celular'=>$this->request->getVar('celular'),
            'email'=>$this->request->getVar('email')
        ];
        
        $idJur=$this->request->getVar('idJurado');

        $jurado->update($idJur,$datos);

        return $this->response->redirect(site_url('/listado_Jurados'));
    }

    public function juradoConcurso($idCon=null)
    {
        $db      = \Config\Database::connect();
    
        $concurso=new concurso();
        
        $datos['idConcurso']=$idCon;

        $datos['concurso']=$concurso->where('idConcurso',$idCon)->first();

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        //Constructor para join entre Concursos y Jurados

        $builder = $db->table('jurados_tbl tj');
        $builder->select('tj.*, tjc.*');
        $builder->where('tjc.idConcurso',$idCon);
        $builder->join('juradoconcurso_tbl tjc', 'tjc.idJurado = tj.idJurado');

        $datos['concursoJurados']=$builder->get()->getResultArray();

        //Calculo cantidad de Jurados
        $builder = $db->table('juradoconcurso_tbl');
        $builder->select('idConcurso');
        $builder->where('idConcurso',$idCon);
        $result = $builder->countAll();
        $datos['CantReg']=$result;

        //print_r($result);

        return view('principal/juradoConcurso',$datos);
    }
    public function altaJuradoConcurso()
    {
        //Hace referencia al modelo
        $juradosConcurso=new Jurados();
        //Carga el arreglo con los datos a insertar
        $datos=[
            'idJurado'=>$this->request->getVar('nombre'),
            'idConcurso'=>$this->request->getVar('documento'),
            'caracter'=>$this->request->getVar('celular'),
            'fechaAsignacion'=>$this->request->getVar('email'),
            'motivoBaja'=>$this->request->getVar('email')
        ];
        //Carga en la base de datos
        $juradosConcurso->insert($datos);
        //Muestra el listado con el registro insertado
        return $this->response->redirect(site_url('/juradoConcurso'));
            
    }
}