<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class ChiTietBuoiDiemDanh extends Model
{
    //
    protected $table = "chitietbuoidiemdanh";
    // public static function mabuoidiemdanh()
    // {
    //     $mabuoidd = DB::table('chitietbuoidiemdanh')
    //                         ->select('ma_buoi_dd')
    //                         ->distinct()
    //                         ->get();
    //     return $mabuoidd;
    // } 

    // public static function diemdanh()
    // {
    //     $diemdanh = DB::table('chitietbuoidiemdanh')
    //                         ->join('sinhvien', 'chitietbuoidiemdanh.ma_sv', '=', 'sinhvien.ma_sv')
    //                         ->join('chitietdiemdanh','chitietbuoidiemdanh.ma_buoi_dd','=','chitietdiemdanh.ma_buoi_dd')
    //                         ->join('monhoc','chitietdiemdanh.ma_mon','=','monhoc.ma_mon')
    //                         ->join('lop','chitietdiemdanh.ma_lop','=','lop.ma_lop')
    //                         ->select('sinhvien.ma_sv','hoten','ngaysinh','chitietbuoidiemdanh.diemdanh','monhoc.so_buoi_th','so_buoi_lt') 
    //                         ->where('lop.ma_lop',Auth::user()->username)
    //                         //->where('chitietbuoidiemdanh.ma_buoi_dd','=','DD001K1')
    //                         ->get();
    //                         //dd($diemdanh);
    //     return $diemdanh;
    // }
}
