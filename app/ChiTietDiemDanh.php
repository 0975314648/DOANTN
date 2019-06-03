<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class ChiTietDiemDanh extends Model
{
    //
    protected $table = "chitietdiemdanh";

    // public static function diemdanh()
    // {

    //     $diemdanh = DB::table('chitietdiemdanh')
    //                         ->join('monhoc', 'chitietdiemdanh.ma_mon', '=', 'monhoc.ma_mon')
    //                         ->join('lop','chitietdiemdanh.ma_lop','=','lop.ma_lop')
    //                         ->join('chitietbuoidiemdanh','chitietdiemdanh.ma_buoi_dd','=','chitietbuoidiemdanh.ma_buoi_dd')
    //                         ->join('sinhvien','chitietbuoidiemdanh.ma_sv','=','sinhvien.ma_sv')
    //                         ->select('sinhvien.ma_sv','sinhvien.hoten','sinhvien.ngaysinh')
    //                         ->where('lop.ma_lop',Auth::user()->username)
    //                         //->distinct()
    //                         ->get();
    //                         //dd($diemdanh);
    //     return $diemdanh;
    // }




    


    
    public static function get_SoBuoiDD($ma_lop,$ma_khoahoc,$ma_mon,$ma_loaihoc){
        //Lấy số buổi theo: môn học và loại học
        if($ma_loaihoc=="LT"){
          $sobuoi=DB::table('chitietdiemdanh')
                    ->select('monhoc.ma_mon','so_buoi_lt','diemdanh.ma_loai_hoc')
                    ->join('monhoc','chitietdiemdanh.ma_mon','=','monhoc.ma_mon')
                    ->join('diemdanh','chitietdiemdanh.ma_diemdanh','=','diemdanh.ma_diemdanh')
                    ->where('ma_lop','=',Auth::user()->username)
                    ->where('ma_loai_hoc','=',"LT")
                    ->where('ma_khoahoc','=',$ma_khoahoc)
                    ->where('monhoc.ma_mon','=',$ma_mon)
                    
                    ->distinct()
                    ->get();
                    
          return $sobuoi;
        }
        if ($ma_loaihoc=="TH"){
          $sobuoi=DB::table('chitietdiemdanh')
                    ->select('ma_mon','so_buoi_lt')
                    ->join('monhoc','chitietdiemdanh.ma_mon','=','monhoc.ma_mon')
                    ->where('ma_lop','=',Auth::user()->username)
                    ->where('ma_loai_hoc','=',"TH")
                    ->where('ma_khoahoc','=',$ma_khoahoc)
                    ->where('ma_mon','=',$ma_mon)
                    ->distinct()
                    ->get();
                    
          return $sobuoi;
        }
        
    
        
       }

       public static function getDulieuBuoiDD($ma_mon,$ma_khoahoc,$ma_loaihoc,$ma_lop,$ma_sv,$ma_buoi_dd){
        $buoidiemdanh=DB::table('chitietbuoidiemdanh')
          ->select('sinhvien.ma_sv','chitietdiemdanh.ma_lop','ma_mon','chitietbuoidiemdanh.diemdanh','giovaolop','diem_ythuc','diem_kynang','diem_kienthuc','chitietbuoidiemdanh.ghichu')
          ->join('chitietdiemdanh','chitietdiemdanh.ma_buoi_dd','=','chitietbuoidiemdanh.ma_buoi_dd')
          ->join('diemdanh','diemdanh.ma_diemdanh','=','chitietdiemdanh.ma_diemdanh')
          ->join('sinhvien','chitietbuoidiemdanh.ma_sv','=','sinhvien.ma_sv')
          ->where('chitietdiemdanh.ma_lop',$ma_lop)
          ->where('diemdanh.ma_khoahoc',$ma_khoahoc)
          ->where('ma_mon','=',$ma_mon)
          ->where('chitietbuoidiemdanh.ma_sv','=',$ma_sv)
          ->where('chitietbuoidiemdanh.ma_buoi_dd',$ma_buoi_dd)
          ->get();
          return $buoidiemdanh;
      }



       public static function getMasv($ma_lop,$ma_khoahoc){
        $masv=DB::table('sinhvien')
            ->select('sinhvien.ma_sv','sinhvien.hoten','sinhvien.gioitinh','sinhvien.ngaysinh')
            ->where('ma_lop',$ma_lop)
            ->where('ma_khoahoc',$ma_khoahoc)
            ->get();
        
        return $masv;
   }
}
