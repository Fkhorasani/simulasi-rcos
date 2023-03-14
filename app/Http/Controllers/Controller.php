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
            'currentPage' => 'home'
        ]);
    }

    public function admin(){
        return view('login.admin',[
            'title' => 'Admin',
            'currentPage' => 'admin'
        ]);
    }

    public function dosenDashboard(){
        return view('login.pages.dosen.dashboard',[
            'title' => 'Dosen',
            'currentPage' => 'dashboard'
        ]);
    }

    public function dosenProposalPenelitian(){
        return view('login.pages.dosen.proposal-penelitian',[
            'title' => 'Proposal Penelitian',
            'currentPage' => 'proposalPenelitian'
        ]);
    }

    public function ListProposalInternal(){
        return view('login.pages.dosen.list-penelitian-internal',[
            'title' => 'List Proposal Internal',
            'currentPage' => 'listProposalInternal'
        ]);
    }

    public function pengajuanAnggaran(){
        return view('login.pages.dosen.pengajuan-anggaran',[
            'title' => 'Pengajuan atau Penyelesaian Anggaran',
            'currentPage' => 'pengajuanAnggaran'
        ]);
    }

    public function pengajuanBuku(){
        return view('login.pages.dosen.pengajuan-buku',[
            'title' => 'Pengajuan Buku',
            'currentPage' => 'pengajuanBuku'
        ]);
    }

    public function dosenPenelitianMandiri(){
        return view('login.pages.dosen.independent-researches',[
            'title' => 'Penelitian Mandiri',
            'currentPage' => 'penelitianMandiri'
        ]);
    }

    public function dosenReview(){
        return view('login.pages.dosen.review',[
            'title' => 'Review',
            'currentPage' => 'review'
        ]);
    }

    public function dosenDokumenPendukung(){
        return view('login.pages.dosen.dokumen-pendukung',[
            'title'=> 'Dokumen Pendukung',
            'currentPage' => 'dokumenPendukung'
        ]);
    }

    public function dosenPengajuanPembelian(){
        return view('login.pages.dosen.pengajuan-pembelian',[
            'title' => 'Pengajuan Pembelian',
            'currentPage' => 'pengajuanPembelian'
        ]);
    }
    public function dosenLaporanPemantauan(){
        return view('login.pages.dosen.laporan-pemantauan',[
            'title' => 'Pemantauan dan Evaluasi Penelitian',
            'currentPage' => 'laporanPemantuan'
        ]);
    }
}
