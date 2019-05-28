<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class ChiTietTKB extends Model
{
    //
    protected $table = "chitietthoikhoabieu";

    public static function get_Thutrongtuan($id){
        $thu=DB::table('ngaytrongtuan')
        ->select('ma_thu')
        ->where('id',$id)
        ->get();
        return $thu;
}

public static function get_Loai($loai){
    $loai=DB::table('loaihoc')
    ->select('ma_loai_hoc')
    ->where('ma_loai_hoc',$loai)
    ->get();
    return $loai ;
}

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

    public static function thoikhoabieu($thu)
    {
        $thoikhoabieu = DB::table('chitietthoikhoabieu')
                            ->join('monhoc', 'chitietthoikhoabieu.ma_mon', '=', 'monhoc.ma_mon')
                            ->join('giangvien', 'chitietthoikhoabieu.ma_gv', '=', 'giangvien.ma_gv')
                            ->join('phonghoc', 'chitietthoikhoabieu.ma_phong', '=', 'phonghoc.ma_phong')
                            ->join('thoikhoabieu','chitietthoikhoabieu.ma_tkb','=','thoikhoabieu.ma_tkb')
                            ->join('ngaytrongtuan','chitietthoikhoabieu.ma_thu','=','ngaytrongtuan.ma_thu')
                            ->join('loaihoc','thoikhoabieu.ma_loai_hoc','=','loaihoc.ma_loai_hoc')
                            ->join('thoigianhoclt','chitietthoikhoabieu.ma_mon','=','thoigianhoclt.ma_mon')
                            ->join('thoigianhocth','chitietthoikhoabieu.ma_mon','=','thoigianhocth.ma_mon')
                            ->join('lop','chitietthoikhoabieu.ma_lop','=','lop.ma_lop')
                            // ->select('loaihoc.ma_loai_hoc','monhoc.tenmonhoc','giangvien.hoten','phonghoc.tenphong'
                            // ,'ngaytrongtuan.thu','chitietthoikhoabieu.tietbatdau','chitietthoikhoabieu.tietketthuc','thoigianhoclt.tuanbatdau','thoigianhoclt.tuanketthuc','thoigianhocth.tuanbatdau','thoigianhocth.tuanketthuc')
                            //->where('lop.ma_lop',Auth::user()->username)
                            ->where('ngaytrongtuan.ma_thu','=',$thu)
                            ->where('thoikhoabieu.ma_loai_hoc','=','LT')
                            ->orderBy('tietbatdau', 'ASC')
                            ->get();
                            //dd($thoikhoabieu);
        return $thoikhoabieu;
    }
}
