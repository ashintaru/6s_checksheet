<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ChecksheetDataModel;
use App\Models\ChecklistModel;

class ChecksheetController extends BaseController
{
    public function index()
    {
        return view('pages/checksheet');
    }

    public function fetchData()
    {
        try {
            $model = new ChecksheetDataModel();
            $data = $model->findAll();

            return view('pages/checksheet', $data);
        } catch (\Exception $e) {
            log_message('error', '=> ' . $e->getMessage());
        }
    }
}
