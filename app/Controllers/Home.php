<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {

        $datos['cabecera']=view('template/cabecera');
        $datos['pie']=view('template/piepagina');

        return view('principal/listado_concurso',$datos);
        
    }

}
