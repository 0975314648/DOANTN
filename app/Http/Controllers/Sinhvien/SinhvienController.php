<?php

namespace App\Http\Controllers\Sinhvien;

use Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChiTietTKB;
use App\ChiTietBuoiDiemDanh;

class SinhvienController extends Controller
{
    //
    public function diemdanh(){

        $mabuoidd = ChiTietBuoiDiemDanh::mabuoidiemdanh();                  
        $mon = ChiTietTKB::mon();
        $diemdanh = ChiTietBuoiDiemDanh::diemdanh();

        return view('sinhvien.diemdanh',compact('mon','diemdanh'));
    }

    function thoikhoabieu()
    {
        return view('sinhvien.tkb');
    }

    function lichthi()
    {
        return view('sinhvien.lichthi');
    }
}

