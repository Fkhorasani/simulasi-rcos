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

    public function dosenDashboard(){
        return view('login.pages.dosen.dashboard',[
            'title' => 'Dosen',
            'active' => 'home'
        ]);
    }

    public function dosenProposalPenelitian(){
        return view('login.pages.dosen.proposal-penelitian',[
            'title' => 'Proposal Penelitian'
        ]);
    }

    public function dosenReview(){
        return view('login.pages.dosen.review',[
            'title' => 'Review',
            'active' => 'review'
        ]);
    }

    public function dosenDokumenPendukung(){
        return view('login.pages.dosen.dokumen-pendukung',[
            'title'=> 'Dokumen Pendukung',
            'active' => 'dokumen-pendukung'
        ]);
    }
}
