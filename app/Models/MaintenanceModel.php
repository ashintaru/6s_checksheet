<?php

namespace App\Models;

use CodeIgniter\Model;

class MaintenanceModel extends Model
{
    protected $table            = 'tbl_maintenance';
    protected $primaryKey       = 'maintenance_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['building', 'area', 'item'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

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

    public function filterMaintenance($buildingId, $areaId)
    {
        $builder = $this->db->table('tbl_maintenance');
        $builder->where('building_id', $buildingId);
        $builder->where('area_code_id', $areaId);
        
        return $builder->get()->getResult();
    }
}
