<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\BuildingModel;
use App\Models\ChecklistModel;

class DashboardController extends BaseController
{
    public function index()
    {
        $session = session();
        $sessionData = [
            'id'             => $session->get('id'),
            'fcusername'     => $session->get('fcusername'),
            'fcempcompany'   => $session->get('fcempcompany'),
            'fcempnumber'    => $session->get('fcempnumber'),
            'fcemplname'     => $session->get('fcemplname'),
            'fcempfname'     => $session->get('fcempfname'),
            'fcempmname'     => $session->get('fcempmname'),
            'fcEmailAddress' => $session->get('fcEmailAddress'),
            'logged_in'      => true
        ];

        $model = new BuildingModel();
        $model1 = new ChecklistModel();

        $buildings = $model->findAll();
        $checklist = $model1->findAll();

        return view('pages/dashboard', [
            'user' => $sessionData,
            'buildings' => $buildings,
            'checklists' => $checklist
        ]);
    }
}
