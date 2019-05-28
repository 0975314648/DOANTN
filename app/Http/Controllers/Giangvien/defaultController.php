<?php

namespace App\Http\Controllers\Giangvien;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\giangvienModel;
use Carbon\Carbon;

class defaultController extends Controller
{
   public function getThongke(){
      $thongke=giangvienModel::Load_Thongke();
      return view('giangvien.thongkediemdanh')->with('thongke',$thongke);
   } 
   public function getchitietThongke(){
   		return view('giangvien.thongkeContent');
   } 
   public function getDiemdanh(){
   		return view('giangvien.diemdanh');
   }
   
   public function getDefault(){
   		return view('giangvien.default');
   }


   public function getIndex(){

      $time=Carbon::now()->dayOfWeek;
      $thu_temp=giangvienModel::get_Thutrongtuan($time);
      $thu=substr($thu_temp,12, -3);

      $lichday=giangvienModel::get_Lichday_TheoThu($thu);
      foreach ($lichday as $a) {
         $tietbatdau=$a->tietbatdau;
         $tietketthuc=$a->tietketthuc;
         $time_start=giangvienModel::get_Thoigianbatdau($tietbatdau);
         $time_end=giangvienModel::get_Thoigianketthuc($tietketthuc);
         //
         $time_start1=substr($time_start,21, -6);
         $time_end1=substr($time_end,22, -6);
         $a->tietbatdau=$time_start1;
         $a->tietketthuc=$time_end1;        
      }
      return view('giangvien.lichdayhomnay')->with('lichday',$lichday);

   }

   public function getLichday(){
      //Code show Lịch dạy hôm nay
      $time1=Carbon::now()->dayOfWeek;
      $thu_temp1=giangvienModel::get_Thutrongtuan($time1);
      $thu1=substr($thu_temp1,12, -3);

      $lichdayhomnay=giangvienModel::get_Lichday_TheoThu($thu1);
      foreach ($lichdayhomnay as $a) {
         $tietbatdau=$a->tietbatdau;
         $tietketthuc=$a->tietketthuc;
         $time_start=giangvienModel::get_Thoigianbatdau($tietbatdau);
         $time_end=giangvienModel::get_Thoigianketthuc($tietketthuc);
         //
         $time_start1=substr($time_start,21, -6);
         $time_end1=substr($time_end,22, -6);
         $a->tietbatdau=$time_start1;
         $a->tietketthuc=$time_end1;        
      }

      //Code show lịch dạy theo tuần
      
      $lichdaytuan=giangvienModel::get_Lichday_TheoTuan();
      foreach ($lichdaytuan as $b) {
         $tietbatdau_2=$b->tietbatdau;
         $tietketthuc_2=$b->tietketthuc;
         $time_start_2=giangvienModel::get_Thoigianbatdau($tietbatdau_2);
         $time_end_2=giangvienModel::get_Thoigianketthuc($tietketthuc_2);
         //
         $time_start1_2=substr($time_start_2,21, -6);
         $time_end1_2=substr($time_end_2,22, -6);
         $b->tietbatdau=$time_start1_2;
         $b->tietketthuc=$time_end1_2;        
      }


      return view('giangvien.lichday')->with('lichday',$lichdayhomnay);

   }
   public function getTest(){
         
      $lichdaytuan=giangvienModel::get_Lichday_TheoTuan();
      foreach ($lichdaytuan as $b) {
         $tietbatdau_2=$b->tietbatdau;
         $tietketthuc_2=$b->tietketthuc;
         $time_start_2=giangvienModel::get_Thoigianbatdau($tietbatdau_2);
         $time_end_2=giangvienModel::get_Thoigianketthuc($tietketthuc_2);
         //
         $time_start1_2=substr($time_start_2,21, -6);
         $time_end1_2=substr($time_end_2,22, -6);
         $b->tietbatdau=$time_start1_2;
         $b->tietketthuc=$time_end1_2;        
      }
      /*
      $dt = Carbon::now('Asia/Ho_Chi_Minh');
      echo $dt->format('l jS \\of F Y h:i:s A');
      echo Carbon::now()->weekOfYear;
      */
      dd($lichdaytuan);

   }

}
