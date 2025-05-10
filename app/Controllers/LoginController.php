<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\RefKioskUserModel;
use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $db;
    protected $db2;

    public function __construct()
    {
        $this->db = \Config\Database::connect('default');
        $this->db2 = \Config\Database::connect('default1');
    }

    public function index()
    {
        $db2 = \Config\Database::connect('default1');

        $query = $db2->query("SELECT * FROM refkioskuser");
        $users = $query->getResult();

        foreach ($users as $user) {
            echo $user->fcusername;
        }
    }

    public function logout()
    {

        session()->destroy();

        return redirect()->to('/');
    }

    public function login()
    {
        try {
            $session = \Config\Services::session();
            $session = session();

            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $query = $this->db2->query("SELECT * FROM refkioskuser WHERE fcusername = ?", [$username]);
            
            $user = $query->getRow();

            if ($user && md5($password) === $user->fcuserpassword) {
                $sessionData = [
                    'fcusername'     => $user->fcusername,
                    'fcempcompany'   => $user->fcempcompany,
                    'fcuserpassword' => $user->fcuserpassword,
                    'fcempnumber'    => $user->fcempnumber,
                    'fcemplname'     => $user->fcemplname,
                    'fcempfname'     => $user->fcempfname,
                    'fcempmname'     => $user->fcempmname,
                    'fcEmailAddress' => $user->fcEmailAddress,
                    'logged_in'      => true
                ];

                $session->set($sessionData);

                // check fcusername if already inserted
                $check_fcusername = $this->db->query("SELECT fcusername FROM tbl_users WHERE fcusername = ?", [$user->fcusername]);
                $local_user = $check_fcusername->getRow();

                if (!$local_user) {
                    $this->db->table('tbl_users')->insert($sessionData);
                }

                return redirect()->to('dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid username or password');
            }
        } catch (\Exception $e) {
            log_message('debug', '=> ' . $e->getMessage());
        }
    }
}
