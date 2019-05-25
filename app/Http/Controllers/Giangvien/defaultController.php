<?php

namespace App\Http\Controllers\Giangvien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;

class defaultController extends Controller
{
   public function getThongke(){
   		$thongke = DB::table('chitietdiemdanh')
                              ->join('monhoc', 'chitietdiemdanh.ma_mon', '=', 'monhoc.ma_mon')
                              ->join('lop','chitietdiemdanh.ma_lop','=','lop.ma_lop')
                              ->join('loaihoc','chitietdiemdanh.ma_loai_hoc','=','loaihoc.ma_loai_hoc')
                              ->where('ma_gv',Auth::user()->username)
                              ->get();
       return view('giangvien.thongkediemdanh')->with('thongke',$thongke);
   } 
   public function getchitietThongke(){
   		return view('giangvien.thongkeContent');
   } 
   public function getDiemdanh(){
   		return view('giangvien.diemdanh');
   }
   public function getLichday(){
   		return view('giangvien.lichday');
   }
   public function getDefault(){
   		return view('giangvien.default');
   }

/*
   public function Thongkediemdanh(){
      $thongke = DB::table('chitietdiemdanh')->join('monhoc', 'chitietdiemdanh.ma_mon', '=', 'monhoc.ma_mon')->join('lop','chitietdiemdanh.ma_lop','=','lop.ma_lop')->join('loaihoc','chitietdiemdanh.ma_loaihoc','=','loaihoc.ma_loaihoc')->where('user.ma_user','giangvien.ma_user')->groupBy('user.username')->get();
       return view('giangvien.thongkediemdanh')->with($thongke);
   }*/
}
