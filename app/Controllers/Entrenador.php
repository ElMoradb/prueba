<?php

namespace App\Controllers;

class Entrenador extends BaseController
{
    public function index(): string
    {

        $entrenadorM = model('EntrenadorM');
            
        $data['entrenador'] = $entrenadorM->findAll();
        return  view('head') .
                view('menu') . 
                view('entrenadores/show', $data) .
                view('footer');
    }

    public function add(){   //get
        return view('head') .
        view('menu') . 
        view('entrenadores/add') .
        view('footer');
    }

    public function edit($identrenador){   //get
        $identrenador=$data['identrenador'] = $identrenador;
        $entrenadorM = model('EntrenadorM');
        $data['entrenador'] = $entrenadorM->where('identrenador',$identrenador)->findAll();
        return view('head') .
        view('menu') . 
        view('entrenadores/edit',$data) . 
        view('footer');

       
    }

    public function update(){
        $entrenadorM = model('EntrenadorM');
        $identrenador = $_POST['identrenador'];
           
            $data = [
                "nombre" => $_POST['nombre'] ,
                "aPaterno" => $_POST['aPaterno'] ,
                "aMaterno" => $_POST['aMaterno'] ,
                "fechaNacimiento" => $_POST['fechaNacimiento'] ,
                "sexo" => $_POST['sexo'] ,
                "correo" => $_POST['correo'] ,
                "numTelefono" => $_POST['numTelefono'] ,
                    ];
           
               $entrenadorM->set($data)->where('identrenador',$identrenador)->update();
               return redirect()->to(base_url('/entrenadores'));
    }


    public function insert (){ //post
        $entrenadorM = model('EntrenadorM');
        
        $data = [
            "nombre" => $_POST['nombre'] ,
            "aPaterno" => $_POST['aPaterno'] ,
            "aMaterno" => $_POST['aMaterno'] ,
            "fechaNacimiento" => $_POST['fechaNacimiento'] ,
            "sexo" => $_POST['sexo'] ,
            "correo" => $_POST['correo'] ,
            "numTelefono" => $_POST['numTelefono'] ,

          ] ;
  
          $entrenadorM = model('EntrenadorM');
          $entrenadorM->insert($data);
          return redirect()->to(base_url('/entrenadores'));

    
    }       


    public function delete($identrenador){
       
        $entrenadorM = model('EntrenadorM');
        $entrenadorM->delete($identrenador);
        return redirect()->to(base_url('/entrenadores'));
    }
}