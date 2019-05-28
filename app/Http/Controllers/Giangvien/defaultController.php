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
      $tuan=Carbon::now()->weekOfYear;
      $thu_temp=giangvienModel::get_Thutrongtuan($time);
      $thu=substr($thu_temp,12, -3);
      $lichday=giangvienModel::get_Lichday_TheoThu($thu);
      
      foreach ($lichday as $key=>$a) {
         if($tuan>=$a->tuanbatdau and $tuan<=$a->tuanketthuc){
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
         else {
            unset($lichday[$key]);
         }
                                        
      }

      return view('giangvien.lichdayhomnay')->with('lichday',$lichday);

   }

   public function getLichday(){
      //Code show Lịch dạy hôm nay
      $time=Carbon::now()->dayOfWeek;
      $tuan=Carbon::now()->weekOfYear;
      $thu_temp=giangvienModel::get_Thutrongtuan($time);
      $thu=substr($thu_temp,12, -3);

      $lichdayhomnay=giangvienModel::get_Lichday_TheoThu($thu);
      foreach ($lichdayhomnay as $key=>$a) {
         if($tuan>=$a->tuanbatdau and $tuan<=$a->tuanketthuc){
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
          else {
               unset($lichdayhomnay[$key]);
         }        
      }

      //Code show lịch dạy theo tuần: đã lọc theo tuần bắt đầu và kết thúc, còn: link tới trang điểm danh     
      $lichdaythu2=giangvienModel::get_Lichday_TheoThu('T2');
      foreach ($lichdaythu2 as $key=>$b) {
         if($tuan>=$b->tuanbatdau and $tuan<=$b->tuanketthuc){
            $tietbatdau_2=$b->tietbatdau;
            $tietketthuc_2=$b->tietketthuc;
            $time_start_2=giangvienModel::get_Thoigianbatdau($tietbatdau_2);
            $time_end_2=giangvienModel::get_Thoigianketthuc($tietketthuc_2);
            //
            $time_start1_2=substr($time_start_2,21, -6);
            $time_end1_2=substr($time_end_2,22, -6);
            $b->tietbatdau=$time_start1_2;
            $b->tietketthuc=$time_end1_2;
            $b->ma_thu="Thứ 2";        
         }
      else {
               unset($lichdaythu2[$key]);
         } 
      }   

      $lichdaythu3=giangvienModel::get_Lichday_TheoThu('T3');
       foreach ($lichdaythu3 as $key=>$b) {
         if($tuan>=$b->tuanbatdau and $tuan<=$b->tuanketthuc){
            $tietbatdau_2=$b->tietbatdau;
            $tietketthuc_2=$b->tietketthuc;
            $time_start_2=giangvienModel::get_Thoigianbatdau($tietbatdau_2);
            $time_end_2=giangvienModel::get_Thoigianketthuc($tietketthuc_2);
            //
            $time_start1_2=substr($time_start_2,21, -6);
            $time_end1_2=substr($time_end_2,22, -6);
            $b->tietbatdau=$time_start1_2;
            $b->tietketthuc=$time_end1_2;
            $b->ma_thu="Thứ 3";        
         }
         else {
                  unset($lichdaythu3[$key]);
            } 
      }   


      $lichdaythu4=giangvienModel::get_Lichday_TheoThu('T4');
      foreach ($lichdaythu4 as $key=>$b) {
         if($tuan>=$b->tuanbatdau and $tuan<=$b->tuanketthuc){
         $tietbatdau_2=$b->tietbatdau;
         $tietketthuc_2=$b->tietketthuc;
         $time_start_2=giangvienModel::get_Thoigianbatdau($tietbatdau_2);
         $time_end_2=giangvienModel::get_Thoigianketthuc($tietketthuc_2);
         //
         $time_start1_2=substr($time_start_2,21, -6);
         $time_end1_2=substr($time_end_2,22, -6);
         $b->tietbatdau=$time_start1_2;
         $b->tietketthuc=$time_end1_2;
         $b->ma_thu="Thứ 4";        
      }
      else {
                  unset($lichdaythu4[$key]);
            } 
      }   
      $lichdaythu5=giangvienModel::get_Lichday_TheoThu('T5');
      foreach ($lichdaythu5 as $key=>$b) {
         if($tuan>=$b->tuanbatdau and $tuan<=$b->tuanketthuc){
         $tietbatdau_2=$b->tietbatdau;
         $tietketthuc_2=$b->tietketthuc;
         $time_start_2=giangvienModel::get_Thoigianbatdau($tietbatdau_2);
         $time_end_2=giangvienModel::get_Thoigianketthuc($tietketthuc_2);
         //
         $time_start1_2=substr($time_start_2,21, -6);
         $time_end1_2=substr($time_end_2,22, -6);
         $b->tietbatdau=$time_start1_2;
         $b->tietketthuc=$time_end1_2;
         $b->ma_thu="Thứ 5";        
      }
      else {
                  unset($lichdaythu5[$key]);
            } 
      }   
      $lichdaythu6=giangvienModel::get_Lichday_TheoThu('T6');
      foreach ($lichdaythu6 as $key=>$b) {
         if($tuan>=$b->tuanbatdau and $tuan<=$b->tuanketthuc){
         $tietbatdau_2=$b->tietbatdau;
         $tietketthuc_2=$b->tietketthuc;
         $time_start_2=giangvienModel::get_Thoigianbatdau($tietbatdau_2);
         $time_end_2=giangvienModel::get_Thoigianketthuc($tietketthuc_2);
         //
         $time_start1_2=substr($time_start_2,21, -6);
         $time_end1_2=substr($time_end_2,22, -6);
         $b->tietbatdau=$time_start1_2;
         $b->tietketthuc=$time_end1_2;
         $b->ma_thu="Thứ 6";        
         }
         else {
                  unset($lichdaythu6[$key]);
            } 
      }   

      $lichdaythu7=giangvienModel::get_Lichday_TheoThu('T7');
       foreach ($lichdaythu7 as $key=>$b) {
         if($tuan>=$b->tuanbatdau and $tuan<=$b->tuanketthuc){
         $tietbatdau_2=$b->tietbatdau;
         $tietketthuc_2=$b->tietketthuc;
         $time_start_2=giangvienModel::get_Thoigianbatdau($tietbatdau_2);
         $time_end_2=giangvienModel::get_Thoigianketthuc($tietketthuc_2);
         //
         $time_start1_2=substr($time_start_2,21, -6);
         $time_end1_2=substr($time_end_2,22, -6);
         $b->tietbatdau=$time_start1_2;
         $b->tietketthuc=$time_end1_2;
         $b->ma_thu="Thứ 7";        
      }
      else {
                  unset($lichdaythu7[$key]);
            } 
      }   
      $lichdaychunhat=giangvienModel::get_Lichday_TheoThu('CN');
       foreach ($lichdaychunhat as $key=>$b) {
         if($tuan>=$b->tuanbatdau and $tuan<=$b->tuanketthuc){
         $tietbatdau_2=$b->tietbatdau;
         $tietketthuc_2=$b->tietketthuc;
         $time_start_2=giangvienModel::get_Thoigianbatdau($tietbatdau_2);
         $time_end_2=giangvienModel::get_Thoigianketthuc($tietketthuc_2);
         //
         $time_start1_2=substr($time_start_2,21, -6);
         $time_end1_2=substr($time_end_2,22, -6);
         $b->tietbatdau=$time_start1_2;
         $b->tietketthuc=$time_end1_2;
         $b->ma_thu="Chủ nhật";        
      }
      else {
                  unset($lichdaychunhat[$key]);
            } 
      }   


      return view('giangvien.lichday')
      ->with('ngay',Carbon::now()->toDateString())
      ->with('tuan',Carbon::now()->weekOfYear)
      ->with('lichday',$lichdayhomnay)
      ->with('lichdaythu2',$lichdaythu2)
      ->with('lichdaythu3',$lichdaythu3)
      ->with('lichdaythu4',$lichdaythu4)
      ->with('lichdaythu5',$lichdaythu5)
      ->with('lichdaythu6',$lichdaythu6)
      ->with('lichdaythu7',$lichdaythu7)
      ->with('lichdaychunhat',$lichdaychunhat);

   }
   public function getTest(){
      
      //dd($lichday);

   }
}
