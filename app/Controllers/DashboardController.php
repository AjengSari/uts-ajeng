<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        if (session()->get('role') != 'admin') {
            return redirect()->to('login');
        }

        return view('admin/v_dashboard');
    }

}
