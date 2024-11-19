<?php

namespace App\Controllers;

class Jugador extends BaseController
{
    public function index(): string
    {

        $jugadorM = model('JugadorM');
            
        $data['jugador'] = $jugadorM->findAll();
        return  view('head') .
                view('menu') . 
                view('jugadores/show', $data) .
                view('footer');
    }

    public function add(){   //get
        return view('head') .
        view('menu') . 
        view('jugadores/add') .
        view('footer');
    }

    public function edit($idjugador){   //get
        $idjugador=$data['idjugador'] = $idjugador;
        $jugadorM = model('JugadorM');
        $data['jugador'] = $jugadorM->where('idjugador',$idjugador)->findAll();
        return view('head') .
        view('menu') . 
        view('jugadores/edit',$data) . 
        view('footer');

       
    }

    public function update(){
        $jugadorM = model('JugadorM');
        $idjugador = $_POST['idjugador'];
           
            $data = [
                "nombre" => $_POST['nombre'] ,
                "aPaterno" => $_POST['aPaterno'] ,
                "aMaterno" => $_POST['aMaterno'] ,
                "fechaNacimiento" => $_POST['fechaNacimiento'] ,
                "nCamiseta" => $_POST['nCamiseta'] ,
                "posicion" => $_POST['posicion'] ,
                "idEquipo" => $_POST['idEquipo'] ,
                "peso" => $_POST['peso'] ,
                "altura" => $_POST['altura'] ,
                "pieHabil" => $_POST['pieHabil'] ,
                "numTelefono" => $_POST['nCamiseta'] ,
                "goles" => $_POST['goles'] ,
                "asistencias" => $_POST['asistencias'] ,
                "tarjetasAmarillas" => $_POST['tarjetasAmarillas'] ,
                "tarjetasRojas" => $_POST['tarjetasRojas'] ,
                "foto" => $_POST['foto'] ,
                    ];
           
               $jugadorM->set($data)->where('idjugador',$idjugador)->update();
               return redirect()->to(base_url('/jugadores'));
    }


    public function insert (){ //post
        $jugadorM = model('JugadorM');
        
        $data = [
            "nombre" => $_POST['nombre'] ,
            "aPaterno" => $_POST['aPaterno'] ,
            "aMaterno" => $_POST['aMaterno'] ,
            "fechaNacimiento" => $_POST['fechaNacimiento'] ,
            "nCamiseta" => $_POST['nCamiseta'] ,
            "posicion" => $_POST['posicion'] ,
            "idEquipo" => $_POST['idEquipo'] ,
            "peso" => $_POST['peso'] ,
            "altura" => $_POST['altura'] ,
            "pieHabil" => $_POST['pieHabil'] ,
            "numTelefono" => $_POST['nCamiseta'] ,
            "goles" => $_POST['goles'] ,
            "asistencias" => $_POST['asistencias'] ,
            "tarjetasAmarillas" => $_POST['tarjetasAmarillas'] ,
            "tarjetasRojas" => $_POST['tarjetasRojas'] ,
            "foto" => $_POST['foto'] ,
            

          ] ;
  
          $jugadorM = model('JugadorM');
          $jugadorM->insert($data);
          return redirect()->to(base_url('/jugadores'));

    
    }       


    public function delete($idjugador){
       
        $jugadorM = model('JugadorM');
        $jugadorM->delete($idjugador);
        return redirect()->to(base_url('/jugadores'));
    }
}