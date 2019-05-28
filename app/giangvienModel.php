<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;
use Carbon\Carbon;

class giangvienModel extends Model
{
    public static function Load_Thongke(){
   		$thongke = DB::table('chitietdiemdanh')
                              ->join('monhoc', 'chitietdiemdanh.ma_mon', '=', 'monhoc.ma_mon')
                              ->join('lop','chitietdiemdanh.ma_lop','=','lop.ma_lop')
                              ->join('loaihoc','chitietdiemdanh.ma_loai_hoc','=','loaihoc.ma_loai_hoc')
                              ->where('ma_gv',Auth::user()->username)
                              ->get();
       //return view('giangvien.thongkediemdanh')->with('thongke',$thongke);
        return $thongke;
   }
   //Lấy ngày tháng năm hiện tại
   public static function get_DateNow(){
   		$date = Carbon::now()->toDateString();
  		return $date;
   }
   //Lấy giờ hiện tại
   public static function get_TimeNow(){
   	$time = Carbon::now()->toTimeString();
   	return $time;
   }

   public static function get_Thoigianbatdau($sTiet){
   		$thoigianbatdau=DB::table('tiethoc')
   		->select('thoigian_batdau')
   		->where('tiet',$sTiet)
   		->get();
   		return $thoigianbatdau;
   }

   public static function get_Thoigianketthuc($sTiet){
   		$thoigianketthuc=DB::table('tiethoc')
   		->select('thoigian_ketthuc')
   		->where('tiet',$sTiet)
   		->get();
   		return $thoigianketthuc;
   }

   public static function get_Thutrongtuan($id){
   		$thu=DB::table('ngaytrongtuan')
   		->select('ma_thu')
   		->where('id',$id)
   		->get();
   		return $thu;
   }
/*
    public static function get_Lichdayhomnay(){
    	$time=Carbon::now()->dayOfWeek;
      	$thu_temp=giangvienModel::get_Thutrongtuan($time);
      	$thu=substr($thu_temp,12, -3);
   		$lichday=DB::table('chitietthoikhoabieu')
   				->join('thoikhoabieu', 'chitietthoikhoabieu.ma_tkb', '=', 'thoikhoabieu.ma_tkb')
   				->join('monhoc', 'chitietthoikhoabieu.ma_mon', '=', 'monhoc.ma_mon')
   				->join('lop', 'chitietthoikhoabieu.ma_lop', '=', 'lop.ma_lop')
   				->join('phonghoc', 'chitietthoikhoabieu.ma_phong', '=', 'phonghoc.ma_phong')
   				->join('loaihoc','thoikhoabieu.ma_loai_hoc','=','loaihoc.ma_loai_hoc')
   				->where('ma_gv','=',Auth::user()->username)
   				->where('ma_thu','=',$thu)
                ->get();
                return $lichday;
	}*/

  public static function get_Lichday_TheoThu($thu){
    $lichday=DB::table('chitietthoikhoabieu')
          ->join('thoikhoabieu', 'chitietthoikhoabieu.ma_tkb', '=', 'thoikhoabieu.ma_tkb')
          ->join('monhoc', 'chitietthoikhoabieu.ma_mon', '=', 'monhoc.ma_mon')
          ->join('lop', 'chitietthoikhoabieu.ma_lop', '=', 'lop.ma_lop')
          ->join('phonghoc', 'chitietthoikhoabieu.ma_phong', '=', 'phonghoc.ma_phong')
          ->join('loaihoc','thoikhoabieu.ma_loai_hoc','=','loaihoc.ma_loai_hoc')
          ->where('ma_gv','=',Auth::user()->username)
          ->where('ma_thu','=',$thu)
          ->get();
          return $lichday;
  }

  public static function get_Lichday_TheoTuan(){
    $lichdaytuan=DB::table('chitietthoikhoabieu')
          ->join('thoikhoabieu', 'chitietthoikhoabieu.ma_tkb', '=', 'thoikhoabieu.ma_tkb')
          ->join('monhoc', 'chitietthoikhoabieu.ma_mon', '=', 'monhoc.ma_mon')
          ->join('lop', 'chitietthoikhoabieu.ma_lop', '=', 'lop.ma_lop')
          ->join('phonghoc', 'chitietthoikhoabieu.ma_phong', '=', 'phonghoc.ma_phong')
          ->join('loaihoc','thoikhoabieu.ma_loai_hoc','=','loaihoc.ma_loai_hoc')
          ->where('ma_gv','=',Auth::user()->username)
          ->where('ma_thu','=',"T2")
          ->orWhere('ma_thu','=',"T3")
          ->orWhere('ma_thu','=',"T4")
          ->orWhere('ma_thu','=',"T5")
          ->orWhere('ma_thu','=',"T6")
          ->orWhere('ma_thu','=',"T7")
          ->orWhere('ma_thu','=',"CN")
          ->get();
          return $lichdaytuan;
  } 
}