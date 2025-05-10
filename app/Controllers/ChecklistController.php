<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BuildingModel;
use App\Models\ItemModel;
use App\Models\UserModel;
use App\Models\AreaCodeModel;
use App\Models\ChecklistModel;
use App\Models\FindingsModel;
use App\Models\PriorityLevelModel;
use App\Models\MaintenanceModel;

class ChecklistController extends BaseController
{
    public function index()
    {
        $model1 = new BuildingModel();
        $model2 = new ItemModel();
        $model3 = new UserModel();
        $model4 = new AreaCodeModel();
        $model5 = new FindingsModel();
        $model6 = new PriorityLevelModel();
        $model7 = new ChecklistModel();
        $model8 = new MaintenanceModel();

        $data['buildings'] = $model1->getBuildings();
        $data['areaCodes'] = $model4->getAreaCodes();
        $data['findings']  = $model5->getFindings();
        $data['items']     = [];

        try {
            $data = [
                'buildings'     => $model1->findAll(),
                'items'         => $model2->findAll(),
                'users'         => $model3->findAll(),
                'areaCodes'     => $model4->findAll(),
                'findings'      => $model5->findAll(),
                'prioritys'     => $model6->findAll(),
                'checklist'     => $model7->findAll(),
                'maintenances'  => $model8->findAll(),
            ];

            return view('pages/checklist', $data);
        } catch (\Exception $e) {
            log_message('error', '=> ' . $e->getMessage());
        }
    }

    public function saveChecklistRow()
    {
        // Get the POST data
        $data = $this->request->getPost();
        log_message('info', '=>' . json_encode($data));

        // Log received data for debugging
        log_message('debug', 'Received data: ' . print_r($data, true));

        // Validate input
        $validation = \Config\Services::validation();
        $rules = [
            'building_id' => 'required',
            'area_id' => 'required',
            'item_id' => 'required',
            'status' => 'required|in_list[OK,NG]',
            'finding_id' => 'required',
            'priority_id' => 'required',
            'dri' => 'required'
        ];

        if (!$validation->setRules($rules)->run($data)) {
            return $this->response->setStatusCode(400)->setJSON([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validation->getErrors()
            ]);
        }

        // Prepare data for insertion
        // $checklistData = [
        //     'building' => $data['building_id'],
        //     'area' => $data['area_id'],
        //     'item' => $data['item_id'],
        //     'status' => $data['status'],
        //     'findings' => $data['finding_id'],
        //     'priority' => $data['priority_id'],
        //     'dri' => $data['dri'] ?? null,
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ];

        // Insert into database
        try {
            $db = \Config\Database::connect();
            $builder = $db->table('tbl_checklist');

            // Check if record exists
            // $existing = $builder->where([
            //     'building' => $data['building_id'],
            //     'area' => $data['area_id'],
            //     'item' => $data['item_id']
            // ])->countAllResults();

            // Inner join to get building name
            $builder->select('b.name as building_name, a.name as area_name, i.name as item_name, f.finding_name, p.priority_level');
            $builder->from('tbl_building b');
            $builder->join('tbl_area_code a', 'a.area_code_id = ' . $data['area_id']);
            $builder->join('tbl_items i', 'i.item_id = ' . $data['item_id']);
            $builder->join('tbl_findings f', 'f.finding_id = ' . $data['finding_id']);
            $builder->join('tbl_priority p', 'p.priority_id = ' . $data['priority_id']);
            $builder->where('b.building_id', $data['building_id']);
            $builder->where('a.area_code_id', $data['area_id']);
            $builder->where('i.item_id', $data['item_id']);

            $query = $builder->get();
            $result = $query->getRow();

            if (!$result) {
                return $this->response->setStatusCode(404)->setJSON([
                    'success' => false,
                    'message' => 'Data not found'
                ]);
            }

            // Prepare data for insertion
            $checklistData = [
                'building' => $result->building_name,
                'area' => $result->area_name,
                'item' => $result->item_name,
                'status' => $data['status'], // Assuming status is coming from the POST data
                'findings' => $result->finding_name,
                'priority' => $result->priority_level,
                'dri' => $data['dri'] ?? null, // Assuming dri is also coming from the POST data
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            // Insert into the checklist table
            $checklistBuilder = $db->table('tbl_checklist'); // Create a new builder for the checklist table
            $existing = $checklistBuilder->where([
                'building' => $result->building_name,
                'area' => $result->area_name,
                'item' => $result->item_name
            ])->countAllResults();

            $checklistBuilder->insert($checklistData);


            // if ($existing > 0) {
            //     // Update existing record
            //     $builder->where([
            //         'building' => $data['building_id'],
            //         'area' => $data['area_id'],
            //         'item' => $data['item_id']
            //     ])->update($checklistData);
            // } else {
            //     // Insert new record
            //     $builder->insert($checklistData);
            // }

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Checklist item saved successfully'
            ]);
        } catch (\Exception $e) {
            log_message('error', 'Error saving checklist row: ' . $e->getMessage());
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => 'Failed to save checklist item'
            ]);
        }
    }

    public function getFilteredMaintenance()
    {
        try {
            $buildingId = $this->request->getVar('buildingId');
            $areaId = $this->request->getVar('areaId');

            $model = new MaintenanceModel();
            $filteredData = $model->filterMaintenance($buildingId, $areaId);

            return $this->response->setJSON($filteredData);

        } catch (\Exception $e) {
            log_message('error', '=>' . $e->getMessage());
        }
    }
}
