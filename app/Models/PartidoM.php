<?php

namespace App\Models;

use CodeIgniter\Model;

class PartidoM extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'partido';
    protected $primaryKey       = 'idPartido';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['idPartido','idCancha','idArbitro','horaInicio','idLocal','idVisitante',];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getCancha (){
        $db=db_connect();
        $sql="SELECT idCancha, cancha FROM cancha";
        $query=$db->query($sql);
        return $query->getResult();
    }
    public function getArbitro (){
        $db=db_connect();
        $sql="SELECT idArbitro, nombre FROM arbitro";
        $query=$db->query($sql);
        return $query->getResult();
    }
    public function getEquipo (){
        $db=db_connect();
        $sql="SELECT idEquipo, nombre FROM equipo";
        $query=$db->query($sql);
        return $query->getResult();
    }


}




