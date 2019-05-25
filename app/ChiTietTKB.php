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
}
