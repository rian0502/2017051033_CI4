<?php

namespace App\Controllers;

use App\Models\Users;
use App\Controllers\BaseController;

class UsersController extends BaseController
{
    public function __construct()
	{
		helper(['form', 'url', 'session']);
		$this->user = new Users();
		$this->session = session();
	}

    public function login()
    {
        $data = [
            'title' => 'Login',
        ];

        return view('admin/login', $data);
    }
    public function authentication(){
        return 
        "login";
    }
}
