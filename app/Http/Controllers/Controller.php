<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function home(){
        return view('cms.home',[
            'title' => 'Home - RCOS UMN',
            'active' => 'home'
        ]);
    }

    public function admin(){
        return view('login.admin',[
            'title' => 'Admin',
            'active' => 'home'
        ]);
    }

    public function dosen(){
        return view('login.dosen',[
            'title' => 'Dosen',
            'active' => 'home'
        ]);
    }
}
