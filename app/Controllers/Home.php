<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        if (session()->get('role') != 'user') {
            return redirect()->to('login');
        }

        return view('user/v_home');
    }

}
