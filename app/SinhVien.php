<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class SinhVien extends Model
{
    //
    public static function sinhvien()
    {
        $sinhvien = DB::table('sinhvien')
                            ->join('lop','sinhvien.ma_lop','=','lop.ma_lop')
                            ->select('ma_sv','hoten','ngaysinh') 
                            ->where('lop.ma_lop',Auth::user()->username)
                            ->get();
        return $sinhvien;
    }
}
