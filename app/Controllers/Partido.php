<?php

namespace App\Controllers;

class Partido extends BaseController
{
    public function index(): string
    {

        $partidoM = model('PartidoM');
            
        $data['partido'] = $partidoM->findAll();
        return  view('head') .
                view('menu') . 
                view('partidos/show', $data) .
                view('footer');
    }

    public function add(){   //get

        $partidoM=model('PartidoM');
        $data['cancha']=$partidoM->getCancha();
        $data['arbitro']=$partidoM->getArbitro();
        $data['equipo']=$partidoM->getEquipo();
        return view('head') .
        view('menu') . 
        view('partidos/add',$data) .
        view('footer');
    }

    public function edit($idpartido){   //get
        $idpartido=$data['idpartido'] = $idpartido;
        $partidoM = model('PartidoM');
        $data['partido'] = $partidoM->where('idpartido',$idpartido)->findAll();
        $data['cancha']= $partidoM->getCancha();
        $data['arbitro']= $partidoM->getArbitro();
        $data['equipo']= $partidoM->getEquipo();

        return view('head') .
        view('menu') . 
        view('partidos/edit',$data) . 
        view('footer');

       
    }

    public function update(){
        $partidoM = model('PartidoM');
        $idpartido = $_POST['idpartido'];
           
            $data = [
                "idCancha" => $_POST['idCancha'] ,
                "idArbitro" => $_POST['idArbitro'] ,
                "horaInicio" => $_POST['horaInicio'] ,
                "idVisitante" => $_POST['idVisitante'] ,
                "idLocal" => $_POST['idLocal'] ,
                    ];
           
               $partidoM->set($data)->where('idpartido',$idpartido)->update();
               return redirect()->to(base_url('/partidos'));
    }


    public function insert (){ //post
        $partidoM = model('PartidoM');
        
        $data = [
            "idCancha" => $_POST['idCancha'] ,
            "idArbitro" => $_POST['idArbitro'] ,
            "horaInicio" => $_POST['horaInicio'] ,
            "idVisitante" => $_POST['idVisitante'] ,
            "idLocal" => $_POST['idLocal'] ,

          ];
  
          $partidoM = model('PartidoM');
          $partidoM->insert($data);
          return redirect()->to(base_url('/partidos'));

    
    }       


    public function delete($idpartido){
       
        $partidoM = model('PartidoM');
        $partidoM->delete($idpartido);
        return redirect()->to(base_url('/partidos'));
    }
}