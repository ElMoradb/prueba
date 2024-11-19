<?php

namespace App\Models;

use CodeIgniter\Model;

class EquipoM extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'equipo';
    protected $primaryKey       = 'idEquipo';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = false;
    protected $allowedFields    = ['idequipo','nombre','identrenador','uniforme','escudo'];

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

    public function getEntrenador (){
        $db=db_connect();
        $sql="SELECT idEntrenador, nombre FROM entrenador";
        $query=$db->query($sql);
        return $query->getResult();
    }



}