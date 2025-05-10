<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\BuildingModel;
use App\Models\ItemModel;
use App\Models\UserModel;
use App\Models\AreaCodeModel;
use App\Models\FindingsModel;
use App\Models\MaintenanceModel;
use App\Models\PriorityLevelModel;

class MaintenanceController extends BaseController
{
    protected $areaModel;
    protected $buildingModel;

    public function __construct()
    {
        $this->areaModel = new AreaCodeModel();
        $this->buildingModel = new BuildingModel();
    }

    public function index()
    {
        $model1 = new MaintenanceModel();

        $data = $model1->findAll();

        return view('pages/maintenance', $data);
    }

    public function maintenance()
    {
        $model1 = new BuildingModel();
        $model2 = new ItemModel();
        $model3 = new UserModel();
        $model4 = new AreaCodeModel();
        $model5 = new FindingsModel();
        $model6 = new PriorityLevelModel();
        $model7 = new MaintenanceModel();

        try {
            $data = [
                'buildings'     => $model1->findAll(),
                'items'         => $model2->findAll(),
                'users'         => $model3->findAll(),
                'areaCodes'     => $model4->findAll(),
                'findings'      => $model5->findAll(),
                'prioritys'     => $model6->findAll(),
                'maintenances'  => $model7->findAll(),
            ];

            return view('pages/maintenance', $data);
        } catch (\Exception $e) {
            log_message('error', '=> ' . $e->getMessage());
        }
    }

    public function addBuilding()
    {
        $model = new BuildingModel();

        if ($this->request->getMethod() === 'POST') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'buildingName' => 'required|min_length[3]|max_length[255]'
            ]);

            if ($this->validate($validation->getRules())) {
                $data = [
                    'name' => $this->request->getPost('buildingName')
                ];

                $model->insert($data);

                return redirect()->to('maintenance')->with('success', 'Added successfully.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('pages/maintenance', $data);
    }

    public function addItem()
    {
        $model = new ItemModel();

        if ($this->request->getMethod() === 'POST') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'itemName' => 'required|min_length[3]|max_length[255]'
            ]);

            if ($this->validate($validation->getRules())) {
                $data = [
                    'name' => $this->request->getPost('itemName')
                ];

                $model->insert($data);

                return redirect()->to('maintenance')->with('success', 'Added successfully.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return  redirect()->to('maintenance');
    }

    public function createAreaCode()
    {
        $model = new AreaCodeModel();

        if ($this->request->getMethod() === 'POST') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'areaCodeName' => 'required|min_length[3]|max_length[255]'
            ]);

            // check if alredy exists
            $areaCodeName = $this->request->getPost('areaCodeName');
            if ($model->where('name', $areaCodeName)->first()) {
                return redirect()->to('maintenance')->with('error', 'Area name already exists.');
                // $validation->setRule('areaCodeName', 'Area Code Name', 'is_unique[tbl_area_code.name]');
            }

            if ($this->validate($validation->getRules())) {
                $data = [
                    'name' => $this->request->getPost('areaCodeName')
                ];

                $model->insert($data);

                return redirect()->to('maintenance')->with('success', 'Added successfully.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('pages/maintenance', $data);
    }

    public function createUser()
    {
        try {
            $model = new UserModel();
            $data = [];

            if ($this->request->getMethod() === 'POST') {
                $validation = \Config\Services::validation();
                $validation->setRules([
                    'username'        => 'required|min_length[3]|max_length[255]',
                    'company'         => 'required|min_length[3]|max_length[255]',
                    'password'        => 'required|min_length[3]|max_length[255]',
                    'employee_number' => 'required|min_length[3]|max_length[255]',
                    'last_name'       => 'required|min_length[3]|max_length[255]',
                    'first_name'      => 'required|min_length[3]|max_length[255]',
                    'middle_name'     => 'required|min_length[3]|max_length[255]',
                    'email'           => 'required|valid_email'
                ]);

                if ($this->validate($validation->getRules())) {
                    $data = [
                        'username'    => $this->request->getPost('username'),
                        'full_name'   => $this->request->getPost('full_name'),
                        'area_code'   => $this->request->getPost('area_code'),
                        'email'       => $this->request->getPost('email'),
                        'role_code'   => $this->request->getPost('role_code'),
                        'first_name'  => $this->request->getPost('first_name'),
                        'middle_name' => $this->request->getPost('middle_name'),
                        'email'       => $this->request->getPost('email')
                    ];

                    $model->insert($data);

                    return redirect()->to('maintenance')->with('success', 'Added successfully.');
                } else {
                    return redirect()->back()->withInput()->with('validation', $this->validator);
                }
            }

            return redirect()->to('maintenance');
        } catch (\Exception $e) {
            log_message('debug', '=> ' . $e->getMessage());
        }
    }

    public function addFinding()
    {
        $model = new FindingsModel();

        if ($this->request->getMethod() === 'POST') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'findingsName' => 'required|min_length[3]|max_length[255]'
            ]);

            if ($this->validate($validation->getRules())) {
                $data = [
                    'finding_name' => $this->request->getPost('findingsName'),
                ];

                $model->insert($data);

                return redirect()->to('maintenance')->with('success', 'Added successfully.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('pages/maintenance', $data);
    }

    public function addPriorityLevel()
    {
        $model = new PriorityLevelModel();

        if ($this->request->getMethod() === 'POST') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'priority_level' => 'required|min_length[1]|max_length[255]'
            ]);

            if ($this->validate($validation->getRules())) {
                $data = [
                    'priority_level' => $this->request->getPost('priority_level'),
                ];

                $model->insert($data);

                return redirect()->to('maintenance')->with('success', 'Added successfully.');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        log_message('info', 'data: ' . json_encode($data));

        return view('pages/maintenance', $data);
    }

    public function addMaintenance()
    {
        $model = new MaintenanceModel();

        if ($this->request->getMethod() === 'POST') {
            $data = [
                'building' => $this->request->getPost('building'),
                'area' => $this->request->getPost('area'),
                'item' => $this->request->getPost('item'),
            ];

            $model->save($data);

            return redirect()->to('maintenance')->with('message', 'Submitted successfully.');
        } else {
            return redirect()->to('maintenance')->with('message', 'Submission error.');
        }
    }

    public function updateMaintenance()
    {
        $request = $this->request;

        $validation = \Config\Services::validation();
        $validation->setRules([
            'building' => 'required',
            'area' => 'required',
            'item' => 'required',
        ]);

        if (!$this->validate($validation->getRules())) {
            return $this->response->setJSON([
                'success' => false,
                'message' => $validation->getErrors()
            ]);
        }

        $data = [
            'building' => $request->getPost('building'),
            'area' => $request->getPost('area'),
            'item' => $request->getPost('item')
        ];

        $model = new MaintenanceModel();

        if ($model->update($data['maintenance_id'], $data)) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Updated successfully!'
            ]);
        } else {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Failed to update!'
            ]);
        }
    }

    public function updateArea($id)
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'area_name' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $areaName = $this->request->getPost('area_name');

        $this->areaModel->update($id, [
            'name' => $areaName
        ]);

        return redirect()->back()->with('success', 'Updated successfully!');
    }

    public function updateBuilding()
    {
        
    }
}
