<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    // Untuk generate password hash
    public function generatePassword()
    {
        echo password_hash('123', PASSWORD_DEFAULT);
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            // Data user disimpan hardcode dulu (bisa ganti ke database nanti)
            $users = [
                'ajeng' => [
                    'password' => '$2y$10$HXGghUchuOaaIKcyAGBE7e/ZGxQaFIY3JRSR3lkytDFSlelsEgsii', // password: 123
                    'role' => 'user'
                ],
                'admin' => [
                    'password' => '$2y$10$HXGghUchuOaaIKcyAGBE7e/ZGxQaFIY3JRSR3lkytDFSlelsEgsii', // password: admin123
                    'role' => 'admin'
                ]
            ];

            if (array_key_exists($username, $users)) {
                $dataUser = $users[$username];

                if (password_verify($password, $dataUser['password'])) {
                    session()->set([
                        'username' => $username,
                        'role' => $dataUser['role'],
                        'isLoggedIn' => true
                    ]);

                    // Redirect berdasarkan role
                    if ($dataUser['role'] == 'admin') {
                        return redirect()->to(base_url('admin-dashboard'));
                    } else {
                        return redirect()->to(base_url('home'));
                    }

                } else {
                    session()->setFlashdata('failed', 'Password salah');
                    return redirect()->back();
                }

            } else {
                session()->setFlashdata('failed', 'Username tidak ditemukan');
                return redirect()->back();
            }
        } else {
            return view('v_login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
