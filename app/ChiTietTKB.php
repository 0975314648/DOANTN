<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class ChiTietTKB extends Model
{
    //
    protected $table = "chitietthoikhoabieu";
    public static function mon()
    {
        $mon = DB::table('chitietthoikhoabieu')
                           ->join('monhoc', 'chitietthoikhoabieu.ma_mon', '=', 'monhoc.ma_mon')
                           ->join('thoikhoabieu','chitietthoikhoabieu.ma_tkb','=','thoikhoabieu.ma_tkb')
                           ->join('loaihoc','thoikhoabieu.ma_loai_hoc','=','loaihoc.ma_loai_hoc')
                           ->join('lop','chitietthoikhoabieu.ma_lop','=','lop.ma_lop')
                           ->select('tenmonhoc')
                           ->where('lop.ma_lop',Auth::user()->username)
                           ->distinct()
                           ->get();
        return $mon;
    }

    public static function thoikhoabieu()
    {
        $thoikhoabieu = DB::table('chitietthoikhoabieu')
                            ->join('monhoc', 'chitietthoikhoabieu.ma_mon', '=', 'monhoc.ma_mon')
                            ->join('giangvien', 'chitietthoikhoabieu.ma_gv', '=', 'giangvien.ma_gv')
                            ->join('phonghoc', 'chitietthoikhoabieu.ma_phong', '=', 'phonghoc.ma_phong')
                            ->join('thoikhoabieu','chitietthoikhoabieu.ma_tkb','=','thoikhoabieu.ma_tkb')
                            ->join('ngaytrongtuan','chitietthoikhoabieu.ma_thu','=','ngaytrongtuan.ma_thu')
                            ->join('lop','chitietthoikhoabieu.ma_lop','=','lop.ma_lop')
                            ->select('thoikhoabieu.ma_loai_hoc','monhoc.tenmonhoc','giangvien.hoten','phonghoc.tenphong'
                            ,'ngaytrongtuan.thu','chitietthoikhoabieu.tietbatdau','chitietthoikhoabieu.tietketthuc')
                            // ->where('lop.ma_lop',Auth::user()->username)
                            // ->where('thoigianhoc.ma_loai_hoc','=','LT')
                            ->distinct()
                            ->get();
                            dd($thoikhoabieu);
        return $thoikhoabieu;
    }
}
