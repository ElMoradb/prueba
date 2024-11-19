<?php

namespace App\Controllers;

class Equipo extends BaseController
{
    public function index(): string
    {

        $equipoM = model('EquipoM');
            
        $data['equipo'] = $equipoM->findAll();
        return  view('head') .
                view('menu') . 
                view('equipos/show', $data) .
                view('footer');
    }

    public function add(){   //get  

        $equipoM=model('EquipoM');
        $data['entrenador']=$equipoM->getEntrenador();
        return view('head') .
        view('menu') . 
        view('equipos/add',$data) .
        view('footer');
    }

    public function edit($idequipo){   //get
        $idequipo=$data['idequipo'] = $idequipo;
        $equipoM = model('EquipoM');
        $data['equipo'] = $equipoM->where('idequipo',$idequipo)->findAll();
        $data['entrenador']= $equipoM->getEntrenador();
        return view('head') .
        view('menu') . 
        view('equipos/edit',$data) . 
        view('footer');

       
    }

    public function update(){
        $equipoM = model('EquipoM');
        $idequipo = $_POST['idequipo'];
           
            $data = [
                "nombre" => $_POST['nombre'] ,
                "idEntrenador" => $_POST['idEntrenador'] ,
                "uniforme" => $_POST['uniforme'] ,
                "escudo" => $_POST['escudo'] , 
                
                    ];
           
               $equipoM->set($data)->where('idequipo',$idequipo)->update();
               return redirect()->to(base_url('/equipos'));
    }


    public function insert (){ //post
        $equipoM = model('EquipoM');
        
        $data = [
            "nombre" => $_POST['nombre'] ,
            "idEntrenador" => $_POST['idEntrenador'] ,
            "uniforme" => $_POST['uniforme'] ,
            "escudo" => $_POST['escudo'] ,

          ] ;
  
          $equipoM = model('EquipoM');
          $equipoM->insert($data);
          return redirect()->to(base_url('/equipos'));

    
    }       


    public function delete($idequipo){
       
        $equipoM = model('EquipoM');
        $equipoM->delete($idequipo);
        return redirect()->to(base_url('/equipos'));
    }
}