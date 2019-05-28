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

    public function thoikhoabieu()
    {
        $thoikhoabieut2 = ChiTietTKB::thoikhoabieu('T2');
        $thoikhoabieut3 = ChiTietTKB::thoikhoabieu('T3');
        $thoikhoabieut4 = ChiTietTKB::thoikhoabieu('T4');
        $thoikhoabieut5 = ChiTietTKB::thoikhoabieu('T5');
        $thoikhoabieut6 = ChiTietTKB::thoikhoabieu('T6');
        $thoikhoabieut7 = ChiTietTKB::thoikhoabieu('T7');
        
          return view('sinhvien.tkb')
                      ->with('thoikhoabieut2',$thoikhoabieut2)
                      ->with('thoikhoabieut3',$thoikhoabieut3)
                      ->with('thoikhoabieut4',$thoikhoabieut4)
                      ->with('thoikhoabieut5',$thoikhoabieut5)
                      ->with('thoikhoabieut6',$thoikhoabieut6)
                      ->with('thoikhoabieut7',$thoikhoabieut7);
    
    }

    function lichthi()
    {
        return view('sinhvien.lichthi');
    }
}


